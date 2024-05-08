<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class Investment extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $casts = [
        'approved_at' => 'datetime',
        'end_at' => 'datetime',
        'auto' => 'boolean',
        'paused' => 'boolean',
        'settled' => 'boolean',
    ];

    public function ScopeActive(Builder $builder)
    {
        return $builder->where('end_at', '>', now());
    }

    public function ScopeCompleted(Builder $builder)
    {
        return $builder->where('end_at', '<', now())->orWhere('deleted_at', '<>', null);
    }

    public function ScopeSettledIs(Builder $builder, bool $settled)
    {
        return $builder->where('settled', $settled);
    }

    public static function open(float|int $amount, Plan $plan, User $user = null)
    {
        $data['amount'] = $amount;
        $data['user_id'] = $user->id;
        $data['plan_id'] = $plan->id;
        $data['duration_in_days'] = 0;
        $data['daily_profit_rate'] = 0;

        $investment = static::query()->create($data);
        $investment->reset();

        return $investment;
    }

    public function approve()
    {
        $this->update([
            'approved_at' => now(),
            'paused' => false,
            'end_at' => null,
        ]);
    }

    public function reset()
    {
        $this->update([
            'approved_at' => null,
            'end_at' => null,
            'paused' => true,
            'settled' => false,
            'profit' => 0,
            'duration_in_days' => $this->plan->terms_days,
            'daily_profit_rate' => $this->plan->daily_interest,
        ]);
    }

    public function close()
    {
        $this->update([
            'end_at' => now(),
            'paused' => true,
        ]);
    }

    public function withdraw(string $description = null)
    {
        DB::transaction(function () use ($description) {
            $total = $this->amount + $this->profit;
            $this->update(['settled' => true]);
            $this->user->wallet->deposit($total, [
                'description' => $description ?? 'Investment withdrawal',
            ]);
        });
    }

    public function approved(): bool
    {
        return (bool) $this->approved_at;
    }

    public function canApprove(): bool
    {
        return !$this->approved() && !$this->closed();
    }

    public function closed(): bool
    {
        return $this->end_at?->lessThan(now()) ?? false;
    }

    public function isCancelled(): Attribute
    {
        return new Attribute(
            get: fn () => (bool) $this->deleted_at
        );
    }

    public function dailyProfitAmount(): Attribute
    {
        return new Attribute(
            get: fn () => $this->amount * $this->daily_profit_rate / 100
        );
    }

    public function totalReturn(): Attribute
    {
        return new Attribute(
            get: fn () => $this->amount * ($this->duration_in_days * $this->daily_profit_rate) / 100
        );
    }

    public function totalEarning(): Attribute
    {
        return new Attribute(
            get: fn () => $this->profit + $this->amount
        );
    }

    public function remainingDays(): Attribute
    {
        return new Attribute(
            get: function () {
                if ($this->approved_at) {
                    $approvedAt = $this->approved_at;
                    $now = now();

                    // Calculate the difference in days between the current time and the approved date
                    $daysRemaining = $approvedAt->diffInDays($now);

                    // If you want to consider the duration in days as well
                    // Subtract the duration from the remaining days
                    $daysRemaining = number_format($this->duration_in_days - $daysRemaining);

                    // Ensure the result is positive
                    $daysRemaining = max(0, $daysRemaining);

                    return $daysRemaining;
                }

                // If the investment is not approved, return null or handle the case as needed
                return null;
            }
        );
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function plan()
    {
        return $this->belongsTo(Plan::class);
    }

    public static function booted()
    {
        static::saving(function (self $model) {
            if ($model->isDirty('approved_at')) {
                $model->end_at = $model->end_at ?? $model->approved_at?->addDays((float) $model->duration_in_days);
            }
        });
    }
}

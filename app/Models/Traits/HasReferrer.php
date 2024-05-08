<?php

namespace App\Models\Traits;

use App\Enums\Enums\WalletType;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Nette\Utils\Random;

trait HasReferrer
{
    public function bonusWallet(): Attribute
    {
        if (!$this->hasWallet(WalletType::BONUS->value)) {
            $this->createWallet([
                'name' => 'Bonus Wallet',
                'slug' => WalletType::BONUS->value,
            ]);
        }

        return new Attribute(
            get: fn () => $this->getWallet(WalletType::BONUS->value),
        );
    }

    public function handleRefer(self $referrer)
    {
        $this->update([
            'referred_by' => $referrer->id,
        ]);
    }

    public function refLink(): Attribute
    {
        if (!$this->ref_code) {
            $this->update(['ref_code' => static::generateUniqueRefCode()]);
        }

        return new Attribute(
            get: fn () => route('register', ['ref' => $this->ref_code])
        );
    }

    public static function generateUniqueRefCode()
    {
        $code = Random::generate(8);

        if (static::query()->where('ref_code', $code)->exists()) {
            return static::generateUniqueRefCode();
        }

        return $code;
    }

    public function referrers()
    {
        return $this->hasMany(self::class, 'referred_by');
    }

    public function sponsor()
    {
        return $this->belongsTo(self::class, 'referred_by');
    }
}

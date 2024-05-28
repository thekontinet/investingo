<?php

namespace App\Models;

use App\Models\Scopes\HiddenForUser;
use Bavix\Wallet\Models\Transaction as BaseTransaction;
use Illuminate\Database\Eloquent\Attributes\ScopedBy;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
#[ScopedBy(HiddenForUser::class)]
class Transaction extends BaseTransaction
{
    use HasFactory;

    public function method(): Attribute
    {
        return new Attribute(
            get: function () {
                $method = $this->meta['method'] ?? null;

                if (!$method) {
                    return;
                }

                return PaymentMethod::with('asset')->find($method);
            }
        );
    }

    public function description(): Attribute
    {
        return new Attribute(
            get: function () {
                $description = $this->meta['description'] ?? null;

                if (!$description) {
                    $description = ucfirst($this->type);
                }

                return $description;
            }
        );
    }

    public function hide(bool $hidden = true): bool
    {
        return $this->update(['hidden' => $hidden]);
    }
}

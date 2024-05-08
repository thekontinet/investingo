<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use App\Enums\Role;
use App\Models\Traits\HasInvestment;
use App\Models\Traits\HasReferrer;
use Bavix\Wallet\Interfaces\Confirmable;
use Bavix\Wallet\Interfaces\Wallet;
use Bavix\Wallet\Traits\CanConfirm;
use Bavix\Wallet\Traits\HasWallet;
use Bavix\Wallet\Traits\HasWallets;
use Filament\Models\Contracts\FilamentUser;
use Filament\Panel;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements Wallet, Confirmable, FilamentUser, MustVerifyEmail
{
    use HasFactory;
    use Notifiable;
    use HasWallet;
    use HasWallets;
    use CanConfirm;
    use HasInvestment;
    use HasReferrer;

    protected $attributes = [
        'role' => Role::Default,
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
            'blocked_at' => 'datetime',
            'role' => Role::class,
        ];
    }

    public function firstname(): Attribute
    {
        return new Attribute(
            get: fn () => explode(' ', $this->name)[0] ?? null
        );
    }

    public function lastname(): Attribute
    {
        return new Attribute(
            get: fn () => explode(' ', $this->name)[1] ?? null
        );
    }

    public function initials(): Attribute
    {
        return new Attribute(
            get: fn () => substr($this->firstname, 0, 2)
        );
    }

    public function canAccessPanel(Panel $panel): bool
    {
        return $this->role === Role::Admin;
    }

    public function blocked()
    {
        return $this->blocked_at?->isPast();
    }
}

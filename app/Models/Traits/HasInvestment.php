<?php

namespace App\Models\Traits;

use App\Models\Investment;
use Illuminate\Database\Eloquent\Casts\Attribute;

trait HasInvestment
{
    public function investmentBalance(): Attribute
    {
        return new Attribute(fn () => once(fn () => $this->investments()->settledIs(false)->sum('amount')));
    }

    public function investmentProfitBalance(): Attribute
    {
        return new Attribute(fn () => once(fn () => $this->investments()->settledIs(false)->sum('profit')));
    }

    public function investments()
    {
        return $this->hasMany(Investment::class);
    }
}

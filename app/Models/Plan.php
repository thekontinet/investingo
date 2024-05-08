<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;

    public function totalReturn(): Attribute
    {
        return new Attribute(
            get: fn () => $this->daily_interest * $this->terms_days
        );
    }
}

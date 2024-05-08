<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentMethod extends Model
{
    use HasFactory;

    protected $casts = [
        'data' => 'array',
    ];

    public function address(): Attribute
    {
        return new Attribute(
            get: fn () => $this->data[0] ?? ''
        );
    }

    public function asset()
    {
        return $this->belongsTo(Asset::class);
    }
}

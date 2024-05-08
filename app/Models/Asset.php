<?php

namespace App\Models;

use App\Services\CoinMarketCap;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    use HasFactory;

    public static function booted()
    {
        static::saving(function (self $model) {
            $data = app(CoinMarketCap::class)->basic($model['symbol']);

            if (!$data) {
                return;
            }

            $model['name'] = $data['name'];
            $model['symbol'] = $data['symbol'];
            $model['description'] = $data['description'];
            $model['price'] = $data['price'];
            $model['image_url'] = $data['logo'];
        });
    }
}

<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class PageSettings extends Settings
{
    public array $testimonies;

    public static function group(): string
    {
        return 'page';
    }
}

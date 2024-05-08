<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class AppSettings extends Settings
{
    public string $name;
    public ?string $email;
    public ?string $description;
    public ?string $headline;
    public ?string $tagline;
    public ?string $logo;
    public ?string $livechat;

    public static function group(): string
    {
        return 'app';
    }
}

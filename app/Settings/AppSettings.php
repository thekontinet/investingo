<?php

namespace App\Settings;

use Illuminate\Support\Facades\Storage;
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

    public function logoUrl()
    {
        return Storage::url($this->logo);
    }

    public static function group(): string
    {
        return 'app';
    }
}

<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class() extends SettingsMigration {
    public function up(): void
    {
        $this->migrator->add('app.name', config('app.name'));
        $this->migrator->add('app.email', config('mail.from.address'));
        $this->migrator->add('app.description', 'Best in the currency market');
        $this->migrator->add('app.headline', 'Grow Your Finance With Us');
        $this->migrator->add('app.tagline', 'We Already Completed Our 15+ Years in Online Investment Business With Trust and Excellent Reputation.');
        $this->migrator->add('app.logo', '/brand/logo.png');
        $this->migrator->add('app.livechat', env('LIVECHAT_URL'));
    }

    public function down(): void
    {
        $this->migrator->delete('app.name');
        $this->migrator->delete('app.email');
        $this->migrator->delete('app.description');
        $this->migrator->delete('app.headline');
        $this->migrator->delete('app.tagline');
        $this->migrator->delete('app.logo');
        $this->migrator->delete('app.livechat');
    }
};

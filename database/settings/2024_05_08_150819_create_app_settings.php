<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class() extends SettingsMigration {
    public function up(): void
    {
        $this->migrator->add('app.name', config('app.name'));
        $this->migrator->add('app.email', config('mail.from.address'));
        $this->migrator->add('app.description', null);
        $this->migrator->add('app.headline', null);
        $this->migrator->add('app.tagline', null);
        $this->migrator->add('app.logo', null);
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

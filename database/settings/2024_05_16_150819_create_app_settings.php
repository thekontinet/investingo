<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class() extends SettingsMigration {
    public function up(): void
    {
        $this->migrator->add('app.phone', null);
        $this->migrator->add('app.address', null);
        $this->migrator->add('app.meta', []);
    }

    public function down(): void
    {
        $this->migrator->delete('app.phone');
        $this->migrator->delete('app.address');
        $this->migrator->delete('app.meta');
    }
};

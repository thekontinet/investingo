<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class() extends SettingsMigration {
    public function up(): void
    {
        $this->migrator->add('page.testimonies', []);
    }

    public function down(): void
    {
        $this->migrator->delete('page.testimonies');
    }
};

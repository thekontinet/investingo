<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class() extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('ref_code')->unique()->nullable();
            $table->foreignId('referred_by')
                ->nullable()
                ->constrained('users', 'id')
                ->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('ref_code');
            $table->dropForeign('users_referred_by_foreign');
            $table->dropColumn('referred_by');
        });
    }
};

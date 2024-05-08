<?php

use App\Models\Plan;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class() extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('investments', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Plan::class)->constrained()->cascadeOnDelete();
            $table->bigInteger('amount');
            $table->bigInteger('profit')->default(0);
            $table->decimal('daily_profit_rate');
            $table->integer('duration_in_days');
            $table->timestamp('approved_at')->nullable();
            $table->timestamp('end_at')->nullable();
            $table->boolean('auto')->default(false);
            $table->boolean('paused')->default(true);
            $table->boolean('settled')->default(false);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('investments');
    }
};

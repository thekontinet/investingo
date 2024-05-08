<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Plan>
 */
class PlanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'min_deposit' => 0,
            'max_deposit' => 100,
            'terms_days' => 30,
            'daily_interest' => 1.5,
            'description' => fake()->sentence(),
        ];
    }
}

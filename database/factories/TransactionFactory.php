<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transaction>
 */
class TransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return ['payable_type' => fake()->randomElement(['App\Models\User']),
        'payable_id' => function () {
            return \App\Models\User::factory()->create()->id;
        },
        'wallet_id' => fake()->numberBetween(1, 10),
        'type' => fake()->randomElement(['deposit', 'withdraw']),
        'amount' => fake()->randomNumber(5),
        'confirmed' => fake()->boolean(),
        'uuid' => fake()->uuid(),
        'created_at' => fake()->dateTimeBetween('-1 year', 'now'),
        'updated_at' => fake()->dateTimeBetween('-1 year', 'now'),
    ];
    }
}

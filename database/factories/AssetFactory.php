<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Asset>
 */
class AssetFactory extends Factory
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
            'symbol' => fake()->name(),
            'price' => 0,
            'description' => fake()->sentence(),
            'type' => fake()->name(),
            'image_url' => fake()->imageUrl(),
        ];
    }
}

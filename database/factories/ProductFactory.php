<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->text('20'),
            'description' => fake()->text('200'),
            'short_notes' => fake()->text('100'),
            'price' => fake()->numberBetween(10,1000),
            'image' => fake()->imageUrl,
            'slug' => fake()->slug
        ];
    }
}

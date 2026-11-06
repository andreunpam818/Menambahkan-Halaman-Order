<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Product>
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
            'product_code' => fake()->unique()->bothify('PRD-####'),
            'product_name' => fake()->words(3, true),
            'product_price' => fake()->randomFloat(2, 1, 999999),
            'current_stock' => fake()->numberBetween(0, 1000),
            'price' => fake()->randomFloat(2, 1, 999999),
        ];
    }
}

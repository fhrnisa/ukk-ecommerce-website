<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition(): array
    {
        return [
                'product_code' => 'ATK-' . fake()->unique()->numberBetween(1000, 9999),
                'name' => fake()->words(3, true),
                'description' => fake()->paragraph(),
                'price' => fake()->numberBetween(5000, 20000),
                'stock' => fake()->numberBetween(10, 100),
                'image' => null,
        ];
    }
}
<?php

namespace Database\Factories;

use App\Models\Category;
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
    public function definition()
    {
        return [
            'name'=>fake()->name(),
            'price'=>fake()->numberBetween(100,1000),
            'amount'=>fake()->numberBetween(10,100),
            // 'category_id'=>Category::inRandomOrder()->first(),
        ];
    }
}

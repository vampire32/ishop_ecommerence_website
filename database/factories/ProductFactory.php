<?php

namespace Database\Factories;

use App\Models\Order;
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
            'ProductName'=>fake()->name(),
            'BrandName'=>fake()->company(),
            'ProductDescription'=>fake()->paragraph(),
            'ProductPrice'=>"35000PKR",
            'ProductPicture'=>fake()->image(),
            'Category'=>fake()->name(),

        ];
    }
}

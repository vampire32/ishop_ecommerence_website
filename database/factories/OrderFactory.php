<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'ProductName'=>fake()->word(),
            'ProductPrice'=>'3,500PKR',
            'ProductPicture'=>fake()->image(),

            'status'=>fake()->word(),
             'user_id'=>User::factory(),
            'Address'=>fake()->address(),
            'Quantity'=>fake()->randomNumber(),


        ];
    }
}

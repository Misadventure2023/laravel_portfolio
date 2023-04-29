<?php

namespace Database\Factories;
use Faker\Generator as Faker;

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
            'order_no' => fake()->randomNumber( 9, $strict = false),
            'sku' => fake()->ean13(),
            'qty' => fake()->randomDigit(),
            'amount' => fake()->randomFloat($nbMaxDecimals = 2,$min = 0, $max = 99),
            'store' => fake()->randomElement(['Lazada','Shopee']),
            'status' => fake()->randomElement(['Pending','Shipping','Delivered']),
        ];
    }
}

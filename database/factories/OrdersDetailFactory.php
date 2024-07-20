<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Orders;
use App\Models\Product;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class OrdersDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'order_id' => Orders::all()->random()->order_id,
            'created_at' => $this->faker->dateTime,
            'updated_at' => $this->faker->dateTime,
            'product_id' => Product::all()->random()->product_id,
            'quantity' => $this->faker->randomNumber(),
            'price' => $this->faker->randomFloat(1, 1, 50)
        ];
    }
}

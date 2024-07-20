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
            //
            'name' => $this->faker->firstName(),
            'price' => $this->faker->randomFloat(2,1,50),
            'created_at' => $this->faker->dateTime,
            'updated_at' => $this->faker->dateTime,
            'description' => $this->faker->text,
        ];
    }
}

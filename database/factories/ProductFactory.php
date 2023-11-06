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
            'code' => $this->faker->unique()->numerify('###-####'),
            'name' => $this->faker->word,
            'price' => $this->faker->randomNumber(2),
            'description' => fake()->sentence(),
            'image' => fake()->imageUrl(),
        ];
    }
}

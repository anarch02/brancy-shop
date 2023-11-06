<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cart>
 */
class CartFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $product_id = Product::query()->inRandomOrder()->value('id');
        $product = Product::find($product_id);
        $product_price = $product->price;
        
        return [
            'user_id' => User::query()->inRandomOrder()->value('id'),
            'product_id' => $product_id,
            'price' => $product_price,
            'quantity' => $this->faker->numberBetween(1, 10),
        ];
    }
}

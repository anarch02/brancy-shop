<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $categories = [
            [
                'name' => 'Hare care',
                'image' => 'assets/images/shop/category/1.webp',
                'color' => '',
            ],
            [
                'name' => 'Skin care',
                'image' => 'assets/images/shop/category/2.webp',
                'color' => '#FFEDB4',
            ],
            [
                'name' => 'Lip stick',
                'image' => 'assets/images/shop/category/3.webp',
                'color' => '#DFE4FF',
            ],
            [
                'name' => 'Face skin',
                'image' => 'assets/images/shop/category/4.webp',
                'color' => '#FFEACC',
            ],
            [
                'name' => 'Blusher',
                'image' => 'assets/images/shop/category/5.webp',
                'color' => '#FFDAE0',
            ],
            [
                'name' => 'Natural',
                'image' => 'assets/images/shop/category/6.webp',
                'color' => '#FFF3DA',
            ],
        ];

        foreach($categories as $category) {
            \App\Models\Category::create($category);
        }

        // \App\Models\Category::factory(5)->create();
        \App\Models\Product::factory(20)->create();
        \App\Models\Post::factory(20)->create();

        $documents = \App\Models\Category::all();
        $products = \App\Models\Product::all();

        foreach ($documents as $document) {
            $productIds = $products->random(rand(1, 20))->pluck('id')->toArray();

            foreach ($productIds as $productId) {
                $quantity = rand(1, 10);
                $product = Product::find($productId);

                $document->products()->attach($productId);
            }
        }
    }
}

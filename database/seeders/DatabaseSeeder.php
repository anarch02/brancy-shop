<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Test',
            'surname' => 'User',
            'is_admin' => true,
            'phone' => '0123456789',
            'email' => 'test@example.com',
            'password' => bcrypt('password'),
        ]);

        \App\Models\User::factory(20)->create();


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

        \App\Models\Cart::factory(100)->create();

        $carts = Cart::all();

        $paymentMethods = [
            "Кредитная карта",
            "PayPal",
            "Банковский перевод",
            "Оплата при доставке",
            "Google Pay",
            "Apple Pay",
            "Яндекс.Деньги",
            "WebMoney",
            "BitCoin",
            "Криптовалюта"
        ];

        // Группируем корзины по пользователю
        $groupedCarts = $carts->groupBy('user_id');


        foreach ($groupedCarts as $userId => $userCarts) {
            // Создаем новый заказ для пользователя
            $order = new Order();
            $order->user_id = $userId;
            // Другие данные для заказа
            $order->cost = $userCarts->sum(function ($cart) {
                return $cart->price * $cart->quantity; // Вычисляем общую стоимость заказа
            });
            $order->status = 'in process'; // Устанавливаем статус заказа по умолчанию
            $order->payment_method = $paymentMethods[array_rand($paymentMethods)]; // Случайный выбор метода оплаты
            $order->delivery_address = fake()->address(); // Генерируем фейковый адрес
            $order->delivery_phone = fake()->phoneNumber(); // Генерируем фейковый номер телефона
            $order->save();
        
        
            // Привязываем товары из корзины к заказу через метод attach
            $order->cart()->attach($userCarts->pluck('id')->toArray());
        }
    }
}

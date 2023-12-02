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

        $products = [
            [
                'code' => 'HrC1Shmp1',
                'category_id' => 1,
                'name' => 'Moisturizing Hair Shampoo',
                'image' => 'shampoo1.jpg',
                'description' => 'Restore moisture and shine to your hair with our hydrating shampoo.',
                'price' => 20,
            ],
            [
                'code' => 'HrC2Cnd1',
                'category_id' => 1,
                'name' => 'Nourishing Hair Conditioner',
                'image' => 'shampoo1.jpg',
                'description' => 'Detangle and nourish your hair with our revitalizing conditioner.',
                'price' => 18,
            ],
            [
                'code' => 'HrC3Serum1',
                'category_id' => 1,
                'name' => 'Repairing Hair Serum',
                'image' => 'shampoo1.jpg',
                'description' => 'Revive damaged hair with our repairing and rejuvenating hair serum.',
                'price' => 25,
            ],
            [
                'code' => 'HrC4Mask1',
                'category_id' => 1,
                'name' => 'Intensive Hair Mask',
                'image' => 'shampoo1.jpg',
                'description' => 'Deeply condition and strengthen your hair with our intensive hair mask.',
                'price' => 30,
            ],
            [
                'code' => 'HrC5Oil1',
                'category_id' => 1,
                'name' => 'Argan Oil Hair Treatment',
                'image' => 'shampoo1.jpg',
                'description' => 'Add shine and manageability to your hair with our argan oil treatment.',
                'price' => 22,
            ],

            [
                'code' => 'SkC1Cleanser1',
                'category_id' => 2,
                'name' => 'Gentle Cleansing Foam',
                'image' => 'skin1.jpg',
                'description' => 'Cleanse your skin with our gentle and refreshing cleansing foam.',
                'price' => 30,
            ],
            [
                'code' => 'SkC2Moisturizer1',
                'category_id' => 2,
                'name' => 'Hydrating Day Moisturizer',
                'image' => 'skin1.jpg',
                'description' => 'Keep your skin hydrated all day with our lightweight moisturizer.',
                'price' => 35,
            ],
            [
                'code' => 'SkC3Serum1',
                'category_id' => 2,
                'name' => 'Anti-Aging Serum',
                'image' => 'skin1.jpg',
                'description' => 'Reduce fine lines and wrinkles with our advanced anti-aging serum.',
                'price' => 50,
            ],
            [
                'code' => 'SkC4Mask1',
                'category_id' => 2,
                'name' => 'Deep Hydration Face Mask',
                'image' => 'skin1.jpg',
                'description' => 'Revitalize your skin with our deep hydration face mask.',
                'price' => 25,
            ],
            [
                'code' => 'SkC5NightCream1',
                'category_id' => 2,
                'name' => 'Restorative Night Cream',
                'image' => 'skin1.jpg',
                'description' => 'Nourish and repair your skin while you sleep with our night cream.',
                'price' => 40,
            ],
            [
                'code' => 'LpC1Matte1',
                'name' => 'Matte Lipstick - Ruby Red',
                'image' => 'lipstik1.jpg',
                'description' => 'Achieve a bold look with our long-lasting matte lipstick in Ruby Red.',
                'price' => 18,
                'category_id' => 3,
            ],
            [
                'code' => 'LpC2Gloss1',
                'name' => 'High-Shine Lip Gloss - Pink Pearl',
                'image' => 'lipstik1.jpg',
                'description' => 'Add a touch of glamour with our high-shine lip gloss in Pink Pearl.',
                'price' => 15,
                'category_id' => 3,
            ],
            [
                'code' => 'LpC3Balm1',
                'name' => 'Tinted Lip Balm - Coral Crush',
                'image' => 'lipstik1.jpg',
                'description' => 'Keep your lips soft and colorful with our tinted lip balm in Coral Crush.',
                'price' => 12,
                'category_id' => 3,
            ],
            [
                'code' => 'LpC4Stain1',
                'name' => 'Lip Stain - Berry Blush',
                'image' => 'lipstik1.jpg',
                'description' => 'Achieve a natural look with our lip stain in Berry Blush.',
                'price' => 20,
                'category_id' => 3,
            ],
            [
                'code' => 'LpC5Plump1',
                'name' => 'Plumping Lip Gloss - Nude Glow',
                'image' => 'lipstik1.jpg',
                'description' => 'Get fuller lips with our plumping lip gloss in Nude Glow.',
                'price' => 25,
                'category_id' => 3,
            ],

            [
                'code' => 'FsC1Cleanser1',
                'name' => 'Gentle Face Cleanser',
                'image' => 'face1.jpg',
                'description' => 'Cleanse your face gently with our refreshing face cleanser.',
                'price' => 28,
                'category_id' => 4,
            ],
            [
                'code' => 'FsC2Moisturizer1',
                'name' => 'Daily Hydrating Moisturizer',
                'image' => 'face1.jpg',
                'description' => 'Keep your face hydrated and protected with our daily moisturizer.',
                'price' => 35,
                'category_id' => 4,
            ],
            [
                'code' => 'FsC3Serum1',
                'name' => 'Anti-Wrinkle Face Serum',
                'image' => 'face1.jpg',
                'description' => 'Reduce wrinkles and fine lines with our advanced anti-wrinkle serum.',
                'price' => 50,
                'category_id' => 4,
            ],
            [
                'code' => 'FsC4Mask1',
                'name' => 'Purifying Face Mask',
                'image' => 'face1.jpg',
                'description' => 'Purify and rejuvenate your face with our deep-cleansing face mask.',
                'price' => 25,
                'category_id' => 4,
            ],
            [
                'code' => 'FsC5NightCream1',
                'name' => 'Restorative Night Cream',
                'image' => 'face1.jpg',
                'description' => 'Nourish and repair your skin while you sleep with our night cream.',
                'price' => 40,
                'category_id' => 4,
            ],
        ];

        $social_medias = [
            [
                'social_media' => 'twitter',
                'url' => 'https://twitter.com',
                'icon' => 'fab fa-facebook-f',
            ],
            [
                'social_media' => 'instagram',
                'url' => 'https://instagram.com',
                'icon' => 'fab fa-instagram',
            ],
            [
                'social_media' => 'facebook',
                'url' => 'https://facebook.com',
                'icon' => 'fab fa-facebook-f',
            ],
            [
                'social_media' => 'pinterest',
                'url' => 'https://pinterest.com',
                'icon' => 'fab fa-pinterest-f',
            ],
        ];

        foreach($categories as $category) {
            \App\Models\Category::create($category);
        }

        // \App\Models\Category::factory(5)->create();
        foreach($products as $product)
        {
            \App\Models\Product::create($product);
        }

        \App\Models\Post::factory(20)->create();


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

<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function checkout()
    {
        $carts = Cart::with('product')->where('user_id', auth()->id())->get();
        
        $totalCost = 0; // Переменная для подсчета общей стоимости заказа

        $order = new Order();
        $order->user_id = auth()->id(); // Предположим, что у вас есть поле user_id в вашей таблице заказов
        $order->cost = $totalCost; // Устанавливаем общую стоимость заказа
    
        $order->save(); // Сохраняем заказ
    
        foreach ($carts as $cart) {
            $order->cart()->attach($cart->id);
    
            $totalCost += $cart->product->price * $cart->quantity; // Подсчет стоимости товара в корзине
        }

        return view('checkout', [
            'carts' => $carts,
            'order' => $order,
            'carts' => $carts,
            'totalCost' => $totalCost // Передаем общую стоимость заказа в представление
        ]);
    }

    public function store(Request $request)
    {
        //
    }
}
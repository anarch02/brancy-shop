<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $carts = Cart::with('product')->where('user_id', auth()->id())->get();
        
        $products = $carts->map(function ($cart) {
            return [
                'id' => $cart->product->id,
                'name' => $cart->product->name,
                'price' => $cart->price,
                'quantity' => $cart->quantity,
                'image' => $cart->product->image, // предположим, у продукта есть свойство image
            ];
        });
    
        $total = $carts->sum(function ($cart) {
            return $cart->price * $cart->quantity;
        });
    
        return response()->json(['products' => $products, 'total' => $total]);
    }
    

    public function add(Request $request, $id)
    {
        if($cart = Cart::where('user_id', auth()->id())->where('product_id', $id)->first()){
            $cart->quantity++;
            $cart->save();
        }
        else{
            $cart = Cart::create([
                'user_id' => auth()->id(),
                'product_id' => $id,
                'price' => Product::find($id)->price,
                'quantity' => 1
            ]);
        }

        return response()->json(['success' => true, 'message' => 'Product added to cart', 'data' => $cart], 200);
    }

    public function update(Request $request)
    {
        $cart = Cart::where('user_id', auth()->id())->where('product_id', $request->id)->first();
        $cart->quantity = $request->quantity;
        $cart->save();
        
    
        return response()->json($cart);
    }
    

    public function delete($id)
    {
        $cart = Cart::where('user_id', auth()->id())->where('product_id', $id)->first();
    
        if ($cart) {
            $cart->delete();
            return response()->json(['success' => true, 'message' => 'Product removed from cart']);
        } else {
            return response()->json(['success' => false, 'message' => 'Product not found in the cart'], 404);
        }
    }
    
    public function cart()
    {
        $carts = Cart::with('product')->where('user_id', auth()->id())->get();

        return view('cart_list', [
            'carts' => $carts
        ]);
    }
}

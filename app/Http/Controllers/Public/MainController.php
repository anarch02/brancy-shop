<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Product;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('welcome', [
            'products' => Product::latest()->take(6)->get(),
            'posts' => Post::latest()->take(3)->get()
        ]);
    }

    public function category($slug)
    {
        $category = Category::where('slug', $slug)->first();
        $products = $category->products()->paginate(2);

        return view('products', [
            'products' => $products,
            'category' => $category->name
        ]);
    }

    public function all_products()
    {
        return view('products', [
            'products' => Product::paginate(12),
        ]);
    }

    public function product($code)
    {
        $product = Product::where('code', $code)->first();

        return view('product', [
            'product' => $product
        ]);
    
    }

    public function get_product($code)
    {
        $product = Product::where('code', $code)->first();

        return response()->json($product);
    }
    
}
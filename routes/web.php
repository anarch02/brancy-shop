<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\OrderController as AdminOrderController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Public\BlogController;
use App\Http\Controllers\Public\CartController;
use App\Http\Controllers\Public\MainController;
use App\Http\Controllers\Public\OrderController;
use App\Http\Controllers\Public\SearchController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [MainController::class, 'index'])->name('index');

Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');

Route::get('/category/{slug}', [MainController::class, 'category'])->name('category');
Route::get('/all_products', [MainController::class, 'all_products'])->name('products');
Route::get('/products/{code}', [MainController::class, 'product'])->name('product');
Route::get('/get_product/{code}', [MainController::class, 'get_product'])->name('get_product');

Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/post/{code}', [BlogController::class, 'show'])->name('post');

// Search

Route::get('/search', [SearchController::class, 'index'])->name('search');

// Cart
Route::get('/cart', [CartController::class, 'cart'])->name('cart.checkout');

// Route::resource('/order', CartController::class);
Route::get('/cart/index', [CartController::class, 'index'])->name('cart');

// add new product
Route::get('/cart/add/{id}', [CartController::class, 'add'])->name('cart.add');

// for update products quantity
Route::post('/cart/update', [CartController::class, 'update'])->name('cart.update');

Route::get('/cart/delete/{id}', [CartController::class, 'delete'])->name('cart.delete');

// Ckeckout
Route::get('/checkout', [OrderController::class, 'checkout'])->name('checkout');

Route::post('/checkout', [OrderController::class, 'store'])->name('checkout.store');


Auth::routes();

Route::get('/profile', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('is_admin')->prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/order/{id}/update/status', [OrderController::class, 'update_status'])->name('order.status');

    Route::resource('products', \App\Http\Controllers\Admin\ProductController::class);
    Route::resource('orders', \App\Http\Controllers\Admin\OrderController::class);
    Route::resource('posts', \App\Http\Controllers\Admin\PostController::class);
});

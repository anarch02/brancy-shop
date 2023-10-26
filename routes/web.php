<?php

use App\Http\Controllers\Public\BlogController;
use App\Http\Controllers\Public\MainController;
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
Route::get('/product/{id}', [MainController::class, 'product'])->name('product');

Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/post/{code}', [BlogController::class, 'show'])->name('post');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

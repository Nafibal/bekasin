<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Models\Product;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/product', [ProductController::class, 'index']);

Route::get('/profile', function() {
    return view('profile');
});

Route::get('/cart', function() {
    return view('cart');
});

Route::get('/checkout', function() {
    return view('checkout');
});

require __DIR__.'/auth.php';

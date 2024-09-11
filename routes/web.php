<?php

use App\Livewire\Cart;
use App\Livewire\Shop;

use App\Livewire\ProductDetail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TestController;

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

/*Route::get('/', function () {
    return view('welcome');
});*/



Route::get('/shop', function () {
    return view('pages/shop');
})->name('shop.show');

Route::get('/shop/product/{productId}', function () {
    return view('pages/product-detail');
})->name('product.show');

//Route::get('/shop/product/{id}', ProductDetail::class)->name('product.show');

Route::get('/cart', function () {
    return view('pages/cart');
})->name('cart.show');

//Route::get('/test', [TestController::class, 'index']);
/*Route::get('/cart', function () {
    return view('cart');
})->name('cart');*/

//Route::get('/test', [TestController::class, 'index']);
Route::get('/test', function () {
    return view('pages/test');
})->name('test');

Route::get('/', [HomeController::class, 'index']);


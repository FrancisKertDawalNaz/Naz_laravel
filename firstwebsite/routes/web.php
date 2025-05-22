<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Admin\ProductController as AdminProductController;

Route::get('/', [ProductController::class, 'index'])->name('home');
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');
Route::get('/cart', [ProductController::class, 'cart'])->name('cart');
Route::post('/add-to-cart/{id}', [ProductController::class, 'addToCart'])->name('add.to.cart');
Route::patch('/update-cart', [ProductController::class, 'updateCart'])->name('update.cart');
Route::delete('/remove-from-cart', [ProductController::class, 'removeFromCart'])->name('remove.from.cart');

// Admin routes
Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('products', AdminProductController::class);
});

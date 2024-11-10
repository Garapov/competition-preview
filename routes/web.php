<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('welcome');
Route::view('/cart', 'cart')->name('cart');
Route::view('/checkout', 'checkout')->name('checkout');
Route::view('/raffles/{id}', 'raffle')->name('raffle');


Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->prefix('/')->group(function () {
    Route::view('/personal', 'dashboard')->name('dashboard');
});

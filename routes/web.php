<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('welcome');
Route::view('/cart', 'cart')->name('cart');
Route::view('/checkout', 'checkout')->name('checkout');
Route::view('/draw-results', 'draw_results')->name('draw-results');
Route::view('/draws', 'draws')->name('draws');
Route::view('/raffles/{id}', 'raffle')->name('raffle');


Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->prefix('/')->group(function () {
    Route::view('/personal', 'dashboard')->name('dashboard');
});

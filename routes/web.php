<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('welcome');


Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->prefix('/')->group(function () {
    Route::view('/personal', 'dashboard')->name('dashboard');
});

<?php

use App\Http\Controllers\CheckoutController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ CheckoutController::class, 'index' ]);
Route::post('/payment', [ CheckoutController::class, 'payment' ])->name('checkout.payment');

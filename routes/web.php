<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\OrderController;

Route::get('/customers', [CustomersController::class, 'index']);
Route::get('/products', [ProductsController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');

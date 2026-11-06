<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [CustomersController::class, 'index']);
Route::get('/customers', [CustomersController::class, 'index'])->name('customers');
Route::get('/customers/create', [CustomersController::class, 'create'])->name('customers.create');
Route::post('/customers/store', [CustomersController::class, 'store'])->name('customers.store');
Route::get('/customers/{id}', [CustomersController::class, 'show'])->name('customers.show');
Route::get('/customers/{id}/edit', [CustomersController::class, 'edit'])->name('customers.edit');
Route::put('/customers/{id}', [CustomersController::class, 'update'])->name('customers.update');
Route::delete('/customers/{id}', [CustomersController::class, 'destroy'])->name('customers.delete');
Route::resource('products', ProductsController::class);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');

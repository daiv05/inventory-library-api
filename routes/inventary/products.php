<?php

use App\Http\Controllers\Productos\ProductoController;
use Illuminate\Support\Facades\Route;

Route::get('/', ProductoController::class)->name('productos.index');
Route::get('/{id}', ProductoController::class)->name('productos.show');
Route::post('/', ProductoController::class)->name('productos.store');
Route::put('/{id}', ProductoController::class)->name('productos.update');
Route::delete('/{id}', ProductoController::class)->name('productos.destroy');

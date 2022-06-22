<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;

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

/* Route::resource('/', ProductoController::class)->names('producto'); */

Route::get('/', [ProductoController::class, 'index'])->name('producto.index');
Route::get('/create', [ProductoController::class, 'create'])->name('producto.create');
Route::post('/', [ProductoController::class, 'store'])->name('producto.store');
Route::get('/{id}', [ProductoController::class, 'show'])->name('producto.show');
Route::get('/{id}/edit', [ProductoController::class, 'edit'])->name('producto.edit');
Route::put('/{id}', [ProductoController::class, 'update'])->name('producto.update');
Route::delete('/{id}', [ProductoController::class, 'destroy'])->name('producto.destroy');

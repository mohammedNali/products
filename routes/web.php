<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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

require 'admin.php';

Route::get('/', function () {
    return view('welcome');
});

//Route::get('products', [\App\Http\Controllers\ProductController::class, 'index']);
//Route::delete('product/{id}', [\App\Http\Controllers\ProductController::class, 'destroy']);

//Route::resource('products', ProductController::class);
//Route::get('products', [ProductController::class, 'index'])->name('products.index');
//Route::post('products/create', [ProductController::class, 'store']);
//
//Route::get('products/{id}/edit', [ProductController::class, 'edit']);
//Route::put('products/{id}/edit', [ProductController::class, 'update'])->name('products.update');


Route::resource('products', ProductController::class);
//    ->only(['index', 'create', 'store', 'edit', 'update', 'destroy', 'show']);

//Route::post('products/create', [ProductController::class, 'store']);

//Route::resource('products', ProductController::class)
//    ->only(['index', 'store', 'edit', 'update', 'destroy']);
//    ->middleware(['auth']);

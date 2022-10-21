<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

// Route::resource('/product','\App\Http\controllers\productsController');

Route::get('/product', [\App\Http\Controllers\ProductsController::class,'index'] )->name('product.index');
Route::delete('/delete/{id}', [\App\Http\Controllers\ProductsController::class,'destroy'] )->name('product.destroy');
Route::get('/edit/{id}', [\App\Http\Controllers\ProductsController::class,'edit'] )->name('product.edit');

Route::put('/update/{id}', [\App\Http\Controllers\ProductsController::class,'update'] )->name('product.update');
Route::get('/create', [\App\Http\Controllers\ProductsController::class,'create'] )->name('product.create');
Route::post('/store', [\App\Http\Controllers\ProductsController::class,'store'] )->name('product.store');

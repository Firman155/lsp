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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// route category
Route::resource('category', App\Http\Controllers\CategoryController::class);

// route product
Route::resource('product', App\Http\Controllers\ProductController::class);

// delete category
Route::get('category/destroy/{id}', [App\Http\Controllers\CategoryController::class, 'destroy'])->name('category.destroy');

// delete product
Route::get('product/destroy/{id}', [App\Http\Controllers\ProductController::class, 'destroy'])->name('product.destroy');

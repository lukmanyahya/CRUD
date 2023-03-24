<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
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
    return view('home');
})->name('home');

// Category dan Product routes
Route::resource('categories', 'App\Http\Controllers\CategoryController');
Route::resource('products', 'App\Http\Controllers\ProductController');
Route::resource('carts', 'App\Http\Controllers\CartController');
// Cart routes
Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');
Route::get('/carts', 'App\Http\Controllers\CartController@index')->name('carts.index');
Route::post('/carts/{product}', 'App\Http\Controllers\CartController@store')->name('carts.store');
Route::patch('/carts/{id}', 'App\Http\Controllers\CartController@update')->name('carts.update');
Route::delete('/carts/{id}', 'App\Http\Controllers\CartController@destroy')->name('carts.destroy');

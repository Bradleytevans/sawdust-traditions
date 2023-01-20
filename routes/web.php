<?php

use App\Models\Product;
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

// Home
Route::get('/', function () {
    return view('home');
});

// Products 
Route::get('/products/furniture', function () {
    return view('furniture');
});
Route::get('/products/kitchen-goods', function () {
    return view('kitchen-goods');
});
Route::get('/products/miscellaneous', function () {
    return view('miscellaneous');
});
Route::get('/products/pet-products', function () {
    return view('pet-products');
});

// Gallery
Route::get('/gallery', function () {
    return view('gallery', [
        'products' => Product::all()
    ]);
});
Route::get('/gallery/{product}', function ($id) {
    return view('product', [
        'product' => Product::findOrFail($id)
    ]);
});

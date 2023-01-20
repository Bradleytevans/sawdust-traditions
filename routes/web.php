<?php

use App\Models\Products;
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
});


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

<?php

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
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
Route::get('products/furniture', function () {
    return view('furniture');
});
Route::get('products/kitchen-goods', function () {
    return view('kitchen-goods');
});
Route::get('products/miscellaneous', function () {
    return view('miscellaneous');
});
Route::get('products/pet-products', function () {
    return view('pet-products');
});

// Gallery
Route::get('gallery', function () {
    return view('gallery', [
        'products' => Product::latest()->get()
    ]);
});
Route::get('gallery/{product:slug}', function (Product $product) {
    return view('product', [
        'product' => $product
    ]);
});
Route::get('categories/{category:slug}', function (Category $category) {
    return view('gallery', [
        'products' => $category->products
    ]);
});
Route::get('authors/{author:username}', function (User $author) {
    return view('gallery', [
        'products' => $author->products
    ]);
});

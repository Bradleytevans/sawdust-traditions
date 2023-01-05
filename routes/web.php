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
    return view('home', [
        'products' => Products::all()
    ]);
});

Route::get('products/{product}', function ($slug) {
    return view('product', [
        'product' => Products::find($slug)
    ]);
})->where('post', '[A-z_\-]+');

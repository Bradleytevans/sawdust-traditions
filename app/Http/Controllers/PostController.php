<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;

class PostController extends Controller
{

    public function index()
    {
        return view('home.index', [
            'categories' => Category::all()
        ]);
    }
    public function gallery()
    {
        return view('home.gallery', [
            'products' => Product::latest()->filter(request(['search', 'category']))->get(),
        ]);
    }

    public function product(Product $product)
    {
        return view('product', [
            'product' => $product
        ]);
    }
}

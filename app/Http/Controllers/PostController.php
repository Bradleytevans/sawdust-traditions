<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;

class PostController extends Controller
{

    public function index()
    {
        return view('home', [
            'categories' => Category::all()
        ]);
    }
    public function gallery()
    {
        return view('gallery', [
            'products' => Product::latest()->filter(request(['search', 'category']))->get(),
            'currentCategory' => Category::firstWhere('slug', request('category')),
        ]);
    }

    public function product(Product $product)
    {
        return view('product', [
            'product' => $product
        ]);
    }
}

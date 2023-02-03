<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

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
            'products' => Product::latest()->filter(request(['search']))->get(),
            'categories' => Category::all()
        ]);
    }

    public function product(Product $product)
    {
        return view('product', [
            'product' => $product
        ]);
    }

    public function categories(Category $category)
    {
        return view('gallery', [
            'products' => $category->products,
            'currentCategory' => $category,
            'categories' => Category::all()
        ]);
    }
}

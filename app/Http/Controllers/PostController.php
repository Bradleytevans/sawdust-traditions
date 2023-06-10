<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\HomeProducts;
use App\Models\Product;

class PostController extends Controller
{

    public function index()
    {
        return view('home.index', [
            'homeProducts' => HomeProducts::all()
        ]);
    }
    public function gallery()
    {
        return view('home.gallery', [
            'products' => Product::latest()->filter(request(['search', 'category']))->paginate(9)->withQueryString(),
        ]);
    }

    public function product(Product $product)
    {
        return view('home.product', [
            'product' => $product
        ]);
    }
}

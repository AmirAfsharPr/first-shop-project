<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('client.products.index', [
            'products' => Product::all()
        ]);
    }

    public function show(Product $product)
    {
        return view('client.products.show', [
           'product' => $product
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller
{

    public function index()
    {
        $products = Product::latest()->get();
        return view('pages.products.index', compact('products'));
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('pages.products.detail', compact('products'));
    }

}


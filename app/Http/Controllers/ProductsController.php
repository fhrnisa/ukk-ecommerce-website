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
        return view('pages.products.detail', compact('product'));
    }

    public function search(Request $request)
    {
        $keyword = $request->input('keyword');

        $products = Product::when($keyword, function ($query) use ($keyword) {
            $query->where('name', 'LIKE', "%{$keyword}%")
                ->orWhere('description', 'LIKE', "%{$keyword}%");
        })->get();

        return view('pages.products.search', [
            'products' => $products,
            'keyword' => $keyword
        ]);
    }


}


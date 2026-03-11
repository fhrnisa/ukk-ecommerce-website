<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller
{

    public function index(Request $request)
    {
        // Mulai Query
        $query = Product::query();

        // Filter berdasarkan Nama Produk
        if ($request->has('search')) {
            $query->where('name', 'like', '%' . $request->search . '%');
        }

        // Filter berdasarkan Harga Minimum
        if ($request->filled('min_price')) {
            $query->where('price', '>=', $request->min_price);
        }

        // Filter berdasarkan Harga Maksimum
        if ($request->filled('max_price')) {
            $query->where('price', '<=', $request->max_price);
        }

        // Logika Urutkan
        switch ($request->get('sort')) {
            case 'terbaru':
                $query->latest();
                break;
            case 'harga_low':
                $query->orderBy('price', 'asc');
                break;
            case 'harga_high':
                $query->orderBy('price', 'desc');
                break;
            case 'nama_az':
                $query->orderBy('name', 'asc');
                break;
            default:
                $query->latest(); // Default tampilkan yang terbaru
                break;
        }

        $products = $query->paginate(12)->withQueryString();

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

    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $added = $request->input('add_stock', 0);

        // 1. Proses penambahan stok jika ada input
        if ($added > 0) {
            $product->increment('stock', $added); // Tambah langsung ke DB
        }

        // 2. Update data lainnya (TIDAK BOLEH menyertakan 'stock' di sini agar tidak tertimpa)
        $product->update($request->only(['name', 'price', 'description'])); 

        return redirect()->back()->with('success', 'Perubahan berhasil disimpan!');
    }

}


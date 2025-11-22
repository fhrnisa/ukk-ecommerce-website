<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('admin.products.index', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'stock' => 'required|numeric',
            'description' => 'nullable',
            'image' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
        ]);

        // Generate kode produk
        $lastProduct = Product::latest('id')->first();
        $nextId = $lastProduct ? $lastProduct->id + 1 : 1;
        $productCode = 'ATK-' . str_pad($nextId, 4, '0', STR_PAD_LEFT); // ATK-0001

        // Upload gambar
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('products', 'public');
        }

        Product::create([
            'product_code' => $productCode,
            'name' => $request->name,
            'price' => $request->price,
            'stock' => $request->stock,
            'description' => $request->description,
            'image' => $imagePath,
        ]);

        return redirect()->route('admin.products.index')->with('success', 'Produk berhasil dtambahkan');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::findOrFail($id);
        return view('admin.products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'stock' => 'required|numeric',
            'description' => 'nullable',
            'image' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
        ]);

        $product = Product::findOrFail($id);
        $imagePath = $product->image;

        if ($request->hasFile('image')) {
            if ($product->image && file_exists(storage_path('app/public/' . $product->image))) {
                unlink(storage_path('app/public/' . $product->image)); //menghapus gambar lama
            }
            $imagePath = $request->file('image')->store('products', 'public');
        }

        $product->update([
            'name' => $request->name,
            'price' => $request->price,
            'stock' => $request->stock,
            'description' => $request->description,
            'image' => $imagePath,
        ]);

        return redirect()->route('admin.products.index')->with('success', 'Produk berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);

        // Hapus gambar
        if ($product->image && file_exists(storage_path('app/public/' . $product->image))) {
            unlink(storage_path('app/public/' . $product->image));
        }

        // Hapus dari database
        $product->delete();

        return redirect()->route('admin.products.index')->with('success', 'Produk telah berhasil dihapus');
    }
}

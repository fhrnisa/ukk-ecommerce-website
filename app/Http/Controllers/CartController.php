<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
    public function index()
    {
        $cart = session()->get('cart', []);
        return view('pages.cart', compact('cart'));
    }

    public function add($id)
    {
        $product = Product::findOrFail($id);
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            $cart[$id]['qty']++;
        } else {
            $cart[$id] = [
                'name' => $product->name,
                'price' => $product->price,
                'image' => $product->image,
                'qty' => 1
            ];
        }

        session()->put('cart', $cart);
        return back()->with('success', 'Produk ditambahkan ke keranjang');
    }

    public function update(Request $request, $id)
    {
        $cart = session()->get('cart', []);
        $cart[$id]['qty'] = $request->qty;
        session()->put('cart', $cart);

        return back();
    }

    public function remove($id)
    {
        $cart = session()->get('cart', []);
        unset($cart[$id]);
        session()->put('cart', $cart);

        return back()->with('success', 'Produk dihapus dari keranjang');
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItem;

class CartController extends Controller
{
    public function index()
    {
        $cartItems = session('cart', []); 

        $grandTotal = 0;
        foreach ($cartItems as $item) {
            $grandTotal += $item['price'] * $item['qty']; 
        }

        return view('pages.cart.index', compact('cartItems', 'grandTotal'));
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

    public function checkout()
    {
        $cartItems = session('cart', []);

        if (empty($cartItems)) {
            return back()->with('error', 'Keranjang kosong!');
        }

        // Hitung total (jika belum dihitung)
        $totalPrice = array_sum(array_map(function ($item) {
            return $item['price'] * $item['qty'];
        }, $cartItems));

        // Buat Order
        $order = Order::create([
            'user_id' => auth()->id(),
            'total_price' => $totalPrice,
            'status' => 'pending',
        ]);

        // Pindahkan item cart (session) → order_items
        foreach ($cartItems as $productId => $item) {
            OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $productId,
                'price' => $item['price'],
                'quantity' => $item['qty'],
            ]);
        }

        // Kosongkan keranjang session
        session()->forget('cart');

        return redirect()->route('orders.show', $order->id)
            ->with('success', 'Checkout berhasil!');
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Notification;
use App\Models\User;
use App\Notifications\NewOrderNotification;

class CheckoutController extends Controller
{
    public function index()
    {
        // Ambil product_id dan qty dari session
        $sessionCart = session('cart', []);

        if (empty($sessionCart)) {
            return redirect()->route('cart.index')->with('error', 'Keranjang belanja kosong');
        }

        // Ambil ID produk dari session cart
        $productIds = array_keys($sessionCart);

        // Ambil data produk (dan harganya) dari database
        $products = \App\Models\Product::whereIn('id', $productIds)->get()->keyBy('id');

        $cartItems = [];
        $total = 0;
        
        // Gabungkan data produk dari DB dengan kuantitas dari Session
        foreach ($sessionCart as $productId => $item) {
            if ($product = $products->get($productId)) {
                $quantity = $item['qty'];
                $price = $product->price;
                
                // Masukkan data ini ke array yang akan dikirim ke View
                $cartItems[] = (object)[
                    'product_id' => $productId,
                    'quantity' => $quantity,
                    // Kita gunakan objek 'product' untuk meniru struktur yang diinginkan View
                    'product' => (object)[
                        'name' => $product->name,
                        'price' => $price,
                    ]
                ];
                
                $total += $price * $quantity;
            }
        }
        
        return view('pages.checkout.index', compact('cartItems', 'total')); 
    }


    public function store(Request $request)
    {
        $request->validate([
            'payment_method' => 'required|string',
        ]);

        $userId = Auth::id();
        $sessionCart = session('cart', []); // <-- Ambil dari session!

        if (empty($sessionCart)) {
            return redirect()->route('cart.index')->with('error', 'Keranjang belanja masih kosong, yuk pilih barang untuk dibeli!');
        }
        
        // Ambil data produk dari DB untuk keamanan harga
        $productIds = array_keys($sessionCart);
        $products = \App\Models\Product::whereIn('id', $productIds)->get()->keyBy('id');
        
        $totalPrice = 0;
        
        DB::beginTransaction();
        try {
            // Hitung total akhir dengan harga dari DB
            foreach ($sessionCart as $productId => $item) {
                if ($product = $products->get($productId)) {
                    $totalPrice += $product->price * $item['qty'];
                } else {
                    throw new \Exception("Produk ID {$productId} tidak ditemukan.");
                }
            }

            // Buat Order
            $order = Order::create([
                'user_id' => $userId,
                'payment_method' => $request->payment_method,
                'total_price' => $totalPrice,
                'status' => 'pending',
            ]);

            // Pindahkan item session → order_items
            foreach ($sessionCart as $productId => $item) {
                $product = $products->get($productId);
                
                OrderItem::create([
                    'order_id' => $order->id,
                    'product_id' => $productId,
                    'price' => $product->price,
                    'quantity' => $item['qty'],
                ]);
            }

            // Kosongkan keranjang session
            session()->forget('cart');

            DB::commit();

            // Kiri notifikasi ke admin
            $admins = User::where('role', 'admin')->get();

            Notification::send($admins, new NewOrderNotification($order));

            return redirect()->route('pages.orders.success', $order->id)
                ->with('success', 'Pesanan berhasil dibuat!');

        } catch (\Throwable $th) {
            DB::rollBack();
            \Log::error('Checkout Error: ' . $th->getMessage());
            return back()->with('error', 'Terjadi kesalahan saat memproses pesanan: ' . $th->getMessage());
        }
    }

    public function success(Order $order)
    {
        return view('order-success', compact('order'));
    }
}

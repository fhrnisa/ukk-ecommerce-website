<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
use App\Models\User;

class AdminSearchController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->q;

        // ✅ Jika input kosong, jangan cari apa-apa
        if (!$keyword) {
            return redirect()->back();
        }

        // ✅ Cari Produk
        $products = Product::where('name', 'like', "%$keyword%")
            ->orWhere('price', 'like', "%$keyword%")
            ->get();

        // ✅ Cari Pesanan
        $orders = Order::with('user')
            ->where('status', 'like', "%$keyword%")
            ->orWhere('total_price', 'like', "%$keyword%")
            ->get();

        // ✅ Cari User
        $users = User::where('name', 'like', "%$keyword%")
            ->orWhere('email', 'like', "%$keyword%")
            ->get();

        return view('admin.search.index', compact(
            'keyword',
            'products',
            'orders',
            'users'
        ));
    }
}

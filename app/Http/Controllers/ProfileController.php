<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
         $orders = Order::where('user_id', Auth::id())
        ->latest()
        ->get();

        return view('pages.profile.index', compact('orders'));
    }

    public function edit()
    {
        return view('pages.profile.mobile.edit'); // khusus mobile
    }

    public function notif()
    {
        return view('pages.profile.mobile.notification');
    }

    public function orders()
    {
         $orders = Order::where('user_id', Auth::id())
        ->latest()
        ->with('items.product')
        ->get();

        return view('pages.profile.mobile.orders', compact('orders'));
    }

    public function showOrder(Order $order)
    {
        if ($order->user_id !== Auth::id()) {
            abort(403);
        }

        $order->load('items.product');

        return view('pages.orders.show', compact('order'));
    }

}

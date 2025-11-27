<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;

class DashboardController extends Controller
{
    public function index()
    {
        $recent_orders = Order::with('user')
            ->orderBy('created_at', 'desc')
            ->take(5)
            ->get();

        return view('admin.dashboard', [
            'total_sales'   => Order::sum('total_price'),
            'total_orders'  => Order::count(),
            'pending'       => Order::where('status', 'pending')->count(),
            'completed'     => Order::where('status', 'selesai')->count(),
            'recent_orders' => $recent_orders,
        ]);
    }
}
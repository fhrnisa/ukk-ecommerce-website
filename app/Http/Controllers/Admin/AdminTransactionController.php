<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;

class AdminTransactionController extends Controller
{
    public function index()
    {
        // Ambil hanya pesanan yang sudah SELESAI
        $transactions = Order::where('status', 'selesai')
            ->latest()
            ->get();

        // Hitung total pemasukan
        $totalIncome = $transactions->sum('total');

        return view('admin.transactions.index', compact(
            'transactions',
            'totalIncome'
        ));
    }
}

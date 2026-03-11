<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Ambil 4 produk ATK
        $products = Product::latest()->take(4)->get();

        // Ambil semua layanan (Pengetikan, Cetak Foto, dll)
        $services = Service::all();

        // Kirim keduanya ke view 'landing'
        return view('pages.welcome', compact('products', 'services'));
    }
}
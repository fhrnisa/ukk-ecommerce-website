<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{

    // Dummy data
    private $products = [
        1 => [
            'id' => 1,
            'title' => 'Cetak Dokumen',
            'desc' => 'Cetak dokumen dalam ukuran A4, F4, HVS, pilihan warna hitam/putih',
            'price' => 500,
            'unit' => '/ lembar',
        ],
        2 => [
            'id' => 2,
            'title' => 'Pengetikan',
            'desc' => 'Pengetikan dalam ukuran A4, F4, HVS, pilihan warna hitam/putih',
            'price' => 3000,
            'unit' => '/ halaman',
        ],
    ];


    public function index()
    {
        $products = $this->products;
        return view('pages.products.index', compact('products'));
    }

    public function show($id)
    {
        if (!array_key_exists($id, $this->products)) {
            abort(404, 'Produk tidak ditemukan');
        }

        $product = $this->products[$id];
        return view('pages.services.detail', compact('products'));
    }    
}


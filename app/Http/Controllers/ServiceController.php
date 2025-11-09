<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{

    // Dummy data
    private $services = [
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
        $services = $this->services;
        return view('pages.services.index', compact('services'));
    }

    public function show($id)
    {
        if (!array_key_exists($id, $this->services)) {
            abort(404, 'Service tidak ditemukan');
        }

        $service = $this->services[$id];
        return view('pages.services.detail', compact('service'));
    }    
}


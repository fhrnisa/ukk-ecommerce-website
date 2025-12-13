<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {// Ambil semua layanan yang tersedia
        $services = Service::where('is_available', true)->get();

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

    public function create()
    {
        return view('pages.services.create');
    }
}


@extends('layouts.app')

@section('title', 'Pesanan Berhasil')

@section('content')
<div class="container mx-auto mt-12 text-center">
    <h2 class="text-2xl font-bold mb-4">Pesanan Berhasil Dibuat</h2>
    <p class="mb-6">Nomor Pesanan: <b>#{{ $order->id }}</b></p>

    <a href="/" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
        Kembali ke Beranda
    </a>
</div>
@endsection

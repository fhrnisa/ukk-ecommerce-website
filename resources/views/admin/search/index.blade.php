@extends('layouts.admin')

@section('title', 'Hasil Pencarian')

@section('content')
<div class="ml-70 mr-8">

    <h2 class="text-lg font-semibold mb-4">
        Hasil Pencarian: "{{ $keyword }}"
    </h2>

    {{-- PRODUK --}}
    <div class="bg-white p-4 mb-6 rounded">
        <h3 class="font-semibold mb-2">Produk</h3>

        @forelse ($products as $product)
            <p>{{ $product->name }} - Rp{{ number_format($product->price,0,',','.') }}</p>
        @empty
            <p class="text-gray-400">Tidak ada produk</p>
        @endforelse
    </div>

    {{-- PESANAN --}}
    <div class="bg-white p-4 mb-6 rounded">
        <h3 class="font-semibold mb-2">Pesanan</h3>

        @forelse ($orders as $order)
            <p>
                #{{ $order->id }} - {{ $order->user->name ?? '-' }} - {{ $order->status }}
            </p>
        @empty
            <p class="text-gray-400">Tidak ada pesanan</p>
        @endforelse
    </div>

    {{-- USER --}}
    <div class="bg-white p-4 rounded">
        <h3 class="font-semibold mb-2">User</h3>

        @forelse ($users as $user)
            <p>{{ $user->name }} - {{ $user->email }}</p>
        @empty
            <p class="text-gray-400">Tidak ada user</p>
        @endforelse
    </div>

</div>
@endsection

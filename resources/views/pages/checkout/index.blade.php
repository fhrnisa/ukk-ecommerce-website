@extends('layouts.app')

@section('title', 'Checkout')

@section('content')
<div class="container mx-auto mt-8">
    <h2 class="text-2xl font-semibold mb-6">Checkout</h2>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        {{-- Rincian Pesanan --}}
        <div class="md:col-span-2 bg-white shadow p-6 rounded-lg">
            <x-monoicon-arrow-left /><a href="{{ route('welcome') }}"></a>
            <h3 class="font-semibold text-lg mb-4">Produk dalam Keranjang</h3>

            @foreach ($cartItems as $id => $item)
                <div class="flex justify-between border-b py-3">
                    <p>{{ $item->product->name }} (x{{ $item->quantity }})</p>
                    <p>Rp {{ number_format($item->product->price * $item->quantity, 0, ',', '.') }}</p>
                </div>
            @endforeach

            <div class="flex justify-between mt-4 text-xl font-bold">
                <p>Total</p>
                <p>Rp {{ number_format($total, 0, ',', '.') }}</p> 
            </div>
        </div>

        {{-- Form Checkout --}}
        <div class="bg-white shadow p-6 rounded-lg">
            <form action="{{ route('checkout.store') }}" method="POST">
                @csrf

                <label class="block font-semibold mb-1">Metode Pembayaran</label>
                <select name="payment_method" class="w-full border p-2 rounded mb-6">
                    <option value="cod">Tunai</option>
                    <option value="qris">QRIS</option>
                </select>

                <button class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700 transition">
                    Buat Pesanan
                </button>
            </form>
        </div>
    </div>
</div>
@endsection

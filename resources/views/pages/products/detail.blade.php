@extends('layouts.app')

@section('content')
<div class="container mx-auto py-10">
    <div class="flex gap-6">
        <img src="{{ asset('storage/' . $product->image) }}" class="w-80 rounded shadow">
        <div>
            <h1 class="text-3xl font-bold mb-3">{{ $product->name }}</h1>
            <p class="text-xl text-green-600 font-semibold mb-4">Rp {{ number_format($product->price) }}</p>
            <p class="mb-6">{{ $product->description }}</p>

            <form action="/cart/add" method="POST">
                @csrf
                <input type="hidden" name="product_code" value="{{ $product->id }}">
                <button class="px-5 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                    Tambah ke Keranjang
                </button>
            </form>
        </div>
    </div>
</div>
@endsection

dd($product);

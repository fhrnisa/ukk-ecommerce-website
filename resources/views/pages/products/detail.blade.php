{{ dd($product) }}

@extends('layouts.app')

@section('content')
<div class="max-w-5xl mx-auto py-10 px-4">
    <div class="grid md:grid-cols-2 gap-10">
        <img src="{{ asset('storage/' . $product->image) }}" class="rounded-xl shadow w-full h-96 object-cover">

        <div>
            <h1 class="text-3xl font-semibold mb-4">{{ $product->name }}</h1>
            <p class="text-xl text-green-700 font-bold mb-2">Rp {{ number_format($product->price, 0, ',', '.') }}</p>
            <p class="text-gray-600 mb-8 leading-relaxed">{{ $product->description }}</p>

            <form action="{{ route('cart.add', $product->id) }}" method="POST">
                @csrf
                <div class="flex items-center gap-3 mb-6">
                    <label class="font-medium">Jumlah:</label>
                    <input type="number" name="quantity" value="1" min="1"
                        class="w-20 border rounded px-2 py-1">
                </div>
                <button type="submit"
                    class="px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-lg shadow-md w-full">
                    Tambahkan ke Keranjang
                </button>
            </form>
        </div>
    </div>
</div>
@endsection

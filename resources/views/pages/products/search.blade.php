@extends('layouts.app')

@section('content')

@include('partials.global.navbar')

<div class="container mx-auto mt-28">
    <h2 class="text-xl font-semibold mb-4">Hasil pencarian: "{{ $keyword }}"</h2>

    @if ($products->isEmpty())
        <p class="text-gray-500">Produk tidak ditemukan.</p>
    @else
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
            @foreach ($products as $product)
                <x-card-product
                    :product="$product"
                    :image="'storage/' . $product->image"
                    :name="$product->name"
                    :price="$product->price"
                    :rating="4.7"      {{-- sementara hardcode jika belum ada rating --}}
                    :terjual="21"      {{-- sementara hardcode jika belum ada data terjual --}}
                />
            @endforeach
        </div>
    @endif
</div>
@endsection

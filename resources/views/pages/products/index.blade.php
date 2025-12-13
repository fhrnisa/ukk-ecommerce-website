@extends('layouts.app')

@section('title', 'Alat Tulis')

@section('content')

@include('partials.global.navbar')

<div class="px-6 md:px-20 py-22">

    <!-- Sort -->
    <div class="flex gap-3 justify-between items-center mb-4">
        <div class="flex gap-1">
          <a href="#"><img src="{{ asset('icon/sort-icon.svg') }}" alt="" class="w-5"></a>
          <span class="text-gray-700 font-normal text-sm">Urutkan</span>
        </div>

        <div class="flex items-center gap-2">
          <a href="#" class="bg-white border-1 border-gray-400 rounded-sm py-1 px-2"><img src="{{ asset('icon/sort-a-z.svg') }}" alt="" class="opacity-50"></a>
          <a href="#" class="bg-white border-1 border-gray-400 rounded-sm py-1 px-2"><img src="{{ asset('icon/sort-z-a.svg') }}" alt="" class="opacity-50"></a>
          <a href="#" class="bg-white border-1 border-gray-400 rounded-sm py-1 px-2 text-sm text-gray-500">Terbaru</a>
          <a href="#" class="bg-white border-1 border-gray-400 rounded-sm py-1 px-2 flex gap-1 text-sm text-gray-500">Harga<img src="{{ asset('icon/chevron-icon.svg') }}" alt="" class="opacity-50"></a>
        </div>
    </div>

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

    
</div>

@endsection

@push('scripts')
<script src="{{ asset('js/navbar.js') }}"></script>
@endpush
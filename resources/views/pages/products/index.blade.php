@extends('layouts.app')

@section('title', 'Layanan')

@section('content')

        @include('partials.global.navbar-products')

<div class="px-6 py-22">

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

    <!-- Card Produk -->
    <div class="grid grid-cols-2 md:grid-cols-4 gap-3 md:gap-6">
        <x-card-product 
            image="images/nota-kontan-1ply.jpg"
            title="Nota Kontan 1 Ply 50 Lembar | Gelatik Kembar"
            price="4000"
            rating="4.5"
            reviews="55"
            terjual="70"
        />

        <x-card-product 
            image="images/nota-kontan-1ply.jpg"
            title="Nota Kontan 1 Ply 50 Lembar | Gelatik Kembar"
            price="4000"
            rating="4.5"
            reviews="55"
            terjual="70"
        />

        <x-card-product 
            image="images/nota-kontan-1ply.jpg"
            title="Nota Kontan 1 Ply 50 Lembar | Gelatik Kembar"
            price="4000"
            rating="4.5"
            reviews="55"
            terjual="70"
        />

        <x-card-product 
            image="images/nota-kontan-1ply.jpg"
            title="Nota Kontan 1 Ply 50 Lembar | Gelatik Kembar"
            price="4000"
            rating="4.5"
            reviews="55"
            terjual="70"
        />

    </div>

</div>

@endsection

@push('scripts')
<script src="{{ asset('js/navbar.js') }}"></script>
@endpush
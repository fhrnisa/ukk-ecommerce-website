@extends('layouts.app')

@section('title', 'Alat Tulis')

@section('content')

@include('partials.global.navbar')

<div class="px-6 md:px-20 py-22">

    <div class="flex flex-col md:flex-row md:items-center justify-between mb-6 gap-4">
        <div class="flex items-center gap-2 text-gray-600">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4h13M3 8h9m-9 4h6m4 0l4-4m0 0l4 4m-4-4v12" />
            </svg>
            <span>Urutkan</span>
        </div>

        <div class="flex items-center gap-2">
            <a href="{{ request()->fullUrlWithQuery(['sort' => 'terbaru']) }}" 
            class="border rounded-lg px-4 py-2 {{ request('sort') == 'terbaru' || !request('sort') ? 'bg-blue-50 border-blue-500 text-blue-600' : 'bg-white' }}">
                Terbaru
            </a>

            <div class="relative inline-block text-left">
                <select onchange="location = this.value;" class="border rounded-lg px-4 py-2 bg-white focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <option value="{{ request()->fullUrlWithQuery(['sort' => 'default']) }}">Harga</option>
                    <option value="{{ request()->fullUrlWithQuery(['sort' => 'harga_low']) }}" {{ request('sort') == 'harga_low' ? 'selected' : '' }}>Terendah</option>
                    <option value="{{ request()->fullUrlWithQuery(['sort' => 'harga_high']) }}" {{ request('sort') == 'harga_high' ? 'selected' : '' }}>Tertinggi</option>
                </select>
            </div>

            <a href="{{ request()->fullUrlWithQuery(['sort' => 'nama_az']) }}" 
            class="border rounded-lg p-2 {{ request('sort') == 'nama_az' ? 'bg-blue-50 border-blue-500 text-blue-600' : 'bg-white' }}" title="Urutkan A-Z">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4h13M3 8h9m-9 4h9m5-1v12m0 0l-4-4m4 4l4-4" />
                </svg>
            </a>
        </div>

        <a href="{{ route('products.index') }}" class="text-red-500 underline">Hapus Semua Filter</a>
    </div>

    <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
        @foreach ($products as $product)
            <x-card-product
                :product="$product"
                :image="$product->image ? asset('images/products/' . $product->image) : asset('images/no-image.png')"
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
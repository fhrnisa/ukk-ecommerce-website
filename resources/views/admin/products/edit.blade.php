@extends('layouts.admin')

@section('content')

<div class="flex h-screen">

    <div class="flex-1 flex flex-col overflow-hidden">

        <main class="flex-1 overflow-x-hidden overflow-y-auto p-6 ml-64 space-y-4">
            <h2 class="text-xl font-semibold mb-4">Edit Produk</h2>

            <form action="{{ route('admin.products.update', $product->id) }}" method="POST" enctype="multipart/form-data" class="space-y-4 p-6 bg-white rounded-lg">
                @csrf
                @method('PUT')

                <div>
                    <label class="block">Nama Produk</label>
                    <input type="text" name="name" class="border w-full border-gray-300 rounded-md p-2" value="{{ $product->name }}">
                </div>

                <div>
                    <label class="block">Harga</label>
                    <input type="number" name="price" class="border w-full border-gray-300 rounded-md p-2" value="{{ $product->price }}">
                </div>

                <div>
                    <label class="block">Stok</label>
                    <input type="number" name="stock" class="border w-full border-gray-300 rounded-md p-2" value="{{ $product->stock }}">
                </div>

                <div>
                    <label class="block">Deskripsi</label>
                    <textarea name="description" class="border w-full border-gray-300 rounded-md p-2">{{ $product->description }}</textarea>
                </div>

                <div>
                    <label class="block">Gambar Produk</label>
                    <input type="file" name="image" class="border border-gray-300 rounded-md w-full p-2">
                    @if($product->image)
                        <img src="{{ asset('storage/' . $product->image) }}" class="w-24 mt-2">
                    @endif
                </div>

                <button class="px-4 py-2 bg-blue-600 text-white rounded">Simpan Perubahan</button>
            </form>
        </main>
    </div>
</div>

@endsection

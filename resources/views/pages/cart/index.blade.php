@extends('layouts.app')

@section('title', 'Keranjang')

@section('content')
<div class="mx-20 my-10">
    <h2 class="text-2xl font-semibold mb-6">Keranjang</h2>
    
    @if(empty($cartItems))
    <p>Keranjang masih kosong.</p>
@else
<table class="w-full border">
    <tr class="bg-gray-200">
        <th class="p-2">Produk</th>
        <th class="p-2">Harga</th>
        <th class="p-2">Qty</th>
        <th class="p-2">Total</th>
        <th class="p-2">Aksi</th>
    </tr>

    @foreach ($cartItems as $id => $item)

@php $total = $item['price'] * $item['qty']; @endphp

<tr>
    <td class="p-2 flex gap-2 items-center">
        {{-- Di Controller Anda, Anda menyimpan 'image', 'name', 'price', 'qty' --}}
        <img src="{{ asset('storage/' . $item['image']) }}" class="w-14 h-14 rounded">
        {{ $item['name'] }}
    </td>

    <td class="p-2">Rp {{ number_format($item['price']) }}</td>

    <td class="p-2">
        {{-- Gunakan $id (product_id) sebagai parameter route --}}
        <form action="{{ route('cart.update', $id) }}" method="POST"> 
            @csrf
            <input type="number" name="qty" value="{{ $item['qty'] }}" min="1" class="w-14 text-center border rounded-md">
            <button class="bg-gray-300 px-2 rounded ml-1">OK</button>
        </form>
    </td>

    <td class="p-2">Rp {{ number_format($total) }}</td>

    <td class="p-2">
        {{-- Gunakan $id (product_id) sebagai parameter route --}}
        <form action="{{ route('cart.remove', $id) }}" method="POST"> 
            @csrf @method('DELETE')
            <button class="bg-red-600 text-white px-2 py-1 rounded-md">Hapus</button>
        </form>
    </td>
</tr>
@endforeach
</table>

<div class="flex justify-between mt-8">
    <h3 class="text-right text-xl font-semibold">
        Total Bayar: Rp {{ number_format($grandTotal) }}
    </h3>

    <a href="{{ route('checkout.index') }}"
       class="bg-blue-600 rounded-md text-white py-1 px-2 hover:bg-blue-700 transition">
        Checkout
    </a>
</div>
@endif


@endsection

@extends('layouts.admin')

@section('content')
<h1 class="text-xl font-bold mb-4">Detail Pesanan #{{ $order->id }}</h1>

<p><strong>Nama:</strong> {{ $order->user->name }}</p>
<p><strong>Total:</strong> Rp {{ number_format($order->total_price) }}</p>
<p><strong>Status:</strong> {{ $order->status }}</p>

<hr class="my-4">

<h2 class="font-semibold mb-2">Item Pesanan</h2>

@foreach ($order->items as $item)
    <div>
        {{ $item->product->name }} -
        {{ $item->quantity }} x
        Rp {{ number_format($item->price) }}
    </div>
@endforeach

<hr class="my-4">

<form method="POST" action="{{ route('admin.orders.updateStatus', $order->id) }}">
    @csrf
    @method('PATCH')

    <select name="status" class="border p-2">
        <option value="pending">Pending</option>
        <option value="diproses">Diproses</option>
        <option value="dikirim">Dikirim</option>
        <option value="selesai">Selesai</option>
        <option value="dibatalkan">Dibatalkan</option>
    </select>

    <button class="bg-blue-600 text-white px-4 py-2 rounded">
        Update Status
    </button>
</form>
@endsection

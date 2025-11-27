@extends('layouts.admin')
@section('title', 'Daftar Pesanan')

@section('content')

<div class="ml-70 mr-8">
    <h2 class="text-lg font-semibold mb-4">Transaksi</h2>
    
    <div class="bg-white p-6 rounded-md">
    
        <table class="min-w-full divide-y divide-gray-200">
            <thead>
                <tr class="text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    <th class="py-3">No.</th>
                    <th class="py-3">Pelanggan</th>
                    <th class="py-3">Tanggal</th>
                    <th class="py-3">Status</th>
                    <th class="py-3 text-right">Total</th>
                    <th class="py-3 text-right">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 text-sm">
                @foreach ($orders as $order)
                <tr>
                    <td class="py-3">{{ $loop->iteration }}</td>
                    <td class="py-3 font-semibold">{{ $order->user->name }}</td>
                    <td class="py-3">{{ $order->created_at->format('d M | H:i') }}</td>
                    <td class="py-3">
                        <span class="px-2 inline-flex text-xs font-semibold rounded-full 
                            {{ $order->status === 'Selesai' ? 'bg-green-100 text-green-800' : 'bg-yellow-100 text-yellow-800' }}">
                            {{ $order->status }}
                        </span>
                    </td>
                    <td class="py-3 text-right">Rp{{ number_format($order->total_amount, 0, ',', '.') }}</td>
                    <td class="py-3 text-right">
                        <a href="{{ route('admin.orders.show', $order->id) }}" class="text-blue-600 hover:underline">Details</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection

@extends('layouts.admin')
@section('title', 'Daftar Pesanan')

@section('content')

<div class="ml-70 mr-8 mt-4">
    <h2 class="text-2xl font-semibold mb-4">Manajemen Pesanan</h2>
    
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
                        <form action="{{ route('admin.orders.status', $order->id) }}" method="POST">
                            @csrf
                            <select 
                                name="status"
                                onchange="this.form.submit()"
                                class="text-xs font-semibold rounded px-2 py-1
                                    {{ $order->status === 'selesai' ? 'bg-green-100 text-green-800' : 'bg-yellow-100 text-yellow-800' }}">

                                <option value="pending" @selected($order->status === 'pending')>Pending</option>
                                <option value="diproses" @selected($order->status === 'diproses')>Diproses</option>
                                <option value="selesai" @selected($order->status === 'selesai')>Selesai</option>
                                <option value="dibatalkan" @selected($order->status === 'dibatalkan')>Dibatalkan</option>

                            </select>
                        </form>
                    </td>

                    <td class="py-3 text-right">
                        Rp{{ number_format($order->total_price, 0, ',', '.') }}
                    </td>

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

<div class="min-h-screen bg-gray-50">

    <!-- HEADER (hanya tampil di MOBILE) -->
    <div class="flex items-center gap-4 p-4 border-b bg-white md:hidden">
        <a href="{{ route('profile') }}">←</a>
        <h1 class="text-lg font-semibold">Riwayat Pesanan</h1>
    </div>

    <!-- LIST ORDERS -->
    <div class="p-4 space-y-4">
        @forelse ($orders as $order)
            <div class="bg-white p-4 rounded-lg shadow-sm space-y-2">
                <div class="flex justify-between items-center">
                    <span class="text-sm text-gray-500">
                        Order #{{ $order->id }}
                    </span>

                    <span class="text-xs px-2 py-1 rounded
                        @if($order->status == 'pending') bg-yellow-100 text-yellow-700
                        @elseif($order->status == 'diproses') bg-blue-100 text-blue-700
                        @elseif($order->status == 'dikirim') bg-purple-100 text-purple-700
                        @elseif($order->status == 'selesai') bg-green-100 text-green-700
                        @else bg-red-100 text-red-700 @endif">
                        {{ ucfirst($order->status) }}
                    </span>
                </div>

                <p class="text-sm font-medium">
                    Total: Rp {{ number_format($order->total_price) }}
                </p>

                <p class="text-xs text-gray-500">
                    {{ $order->created_at->format('d M Y H:i') }}
                </p>

                <a href="{{ route('orders.show', $order->id) }}"
                   class="text-blue-500 text-sm">
                    Lihat Detail
                </a>
            </div>
        @empty
            <p class="text-center text-gray-500">Belum ada pesanan.</p>
        @endforelse
    </div>

</div>

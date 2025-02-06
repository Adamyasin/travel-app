<aside class="w-64 bg-white shadow-md h-screen p-4">
    <h2 class="text-xl font-semibold mb-4">Kategori</h2>
    <ul>
        <!-- Admin view -->
        @if (Auth::user()->role == 'admin')
            <li class="mb-2">
                <a href="javascript:void(0)" onclick="showSection('jadwal')"
                    class="block w-full text-left p-2 rounded bg-blue-100">Jadwal Travel</a>
            </li>
            <li class="mb-2">
                <a href="javascript:void(0)" onclick="showSection('pembayaran')"
                    class="block w-full text-left p-2 rounded bg-blue-100">Pembayaran</a>
            </li>
            <!-- User view -->
        @else
            <li class="mb-2">
                <a href="javascript:void(0)" onclick="showSection('pemesanan')"
                    class="block w-full text-left p-2 rounded bg-blue-100">Pemesanan</a>
            </li>
            <li class="mb-2">
                <a href="javascript:void(0)" onclick="showSection('pembayaran')"
                    class="block w-full text-left p-2 rounded bg-blue-100">Pembayaran</a>
            </li>
            <li class="mb-2">
                <a href="javascript:void(0)" onclick="showSection('riwayat')"
                    class="block w-full text-left p-2 rounded bg-blue-100">Riwayat</a>
            </li>
        @endif
    </ul>
</aside>

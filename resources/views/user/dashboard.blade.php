<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard User</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
    <!-- Navbar -->
    @include('layouts/navbar')

    <div class="flex">
        <!-- Sidebar -->
        @include('layouts/sidebar')

        <main class="flex-1 p-6">
            @include('user/pemesanan')
            @include('user/pembayaran')
            @include('user/riwayat')

            <h1 class="text-2xl font-semibold mb-6">Selamat datang, {{ Auth::user()->name }}!</h1>

            <!-- Dashboard Summary -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="bg-white p-4 rounded shadow">
                    <h2 class="text-xl font-semibold">Pemesan</h2>
                    <p class="text-lg">2</p>
                </div>
                <div class="bg-white p-4 rounded shadow">
                    <h2 class="text-xl font-semibold">Pembayaran</h2>
                    <p class="text-lg">1</p>
                </div>
                <div class="bg-white p-4 rounded shadow">
                    <h2 class="text-xl font-semibold">Jadwal Travel</h2>
                    <p class="text-lg">5</p>
                </div>
                <div class="bg-white p-4 rounded shadow">
                    <h2 class="text-xl font-semibold">Riwayat</h2>
                    <p class="text-lg">3</p>
                </div>
            </div>
        </main>

    </div>

</body>

<script>
    function showSection(sectionId) {
        // Menyembunyikan semua section
        document.getElementById('pemesanan').classList.add('hidden');
        document.getElementById('pembayaran').classList.add('hidden');
        document.getElementById('riwayat').classList.add('hidden');

        // Menampilkan section yang dipilih
        document.getElementById(sectionId).classList.remove('hidden');
    }
</script>


</html>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
    @include('layouts/navbar')
    <div class="flex">
        @include('layouts/sidebar')

        <main class="flex-1 p-6">
            <!-- Bagian Jadwal Travel -->
            <section id="jadwal">
                @include('admin.jadwal', ['jadwal' => $jadwal ?? collect()])
            </section>

            <!-- Bagian Laporan -->
            <section id="laporan" class="hidden">
                @include('admin.laporan')
            </section>
        </main>
    </div>

    <script>
        function showSection(sectionId) {
            document.getElementById('jadwal').classList.add('hidden');
            document.getElementById('laporan').classList.add('hidden');
            document.getElementById(sectionId).classList.remove('hidden');
        }

        // Tampilkan "jadwal" sebagai tampilan default
        document.addEventListener("DOMContentLoaded", function() {
            showSection('jadwal');
        });
    </script>
</body>

</html>

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
            @include('admin/jadwal')
            @include('admin/pembayaran')
        </main>
    </div>

    <script>
        function showSection(sectionId) {
            document.getElementById('jadwal').classList.add('hidden');
            document.getElementById('pembayaran').classList.add('hidden');
            document.getElementById(sectionId).classList.remove('hidden');
        }
    </script>
</body>

</html>

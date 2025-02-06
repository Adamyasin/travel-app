<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
    @include('layouts.navbar')

    <div class="flex">
        @include('layouts.sidebar') <!-- Sidebar -->
        <div class="w-full p-6">
            @yield('content') <!-- Konten dinamis -->
            </main>
        </div>
</body>

</html>

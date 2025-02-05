<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel App</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Smooth Scroll */
        html {
            scroll-behavior: smooth;
        }
    </style>
</head>

<body class="bg-gray-50 text-gray-800">

    <!-- Navbar -->
    <nav class="bg-white shadow-md fixed w-full z-10 top-0 left-0">
        <div class="container mx-auto px-4 py-3 flex justify-between items-center">
            <a href="#" class="text-xl font-bold text-blue-600">Travel App</a>
            <button id="menu-btn" class="text-gray-800 md:hidden focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
            <ul id="menu" class="hidden md:flex space-x-6 items-center">
                <li><a href="#home" class="nav-link text-gray-600 hover:text-blue-600">Home</a></li>
                <li><a href="#about" class="nav-link text-gray-600 hover:text-blue-600">About</a></li>
                <li><a href="#contact" class="nav-link text-gray-600 hover:text-blue-600">Contact</a></li>
                <li><a href="{{ url('/login') }}"
                        class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Login</a></li>
            </ul>
        </div>
    </nav>

    <!-- Home Section -->
    <section id="home" class="h-screen flex items-center justify-center bg-cover bg-center"
        style="background-image: url('https://source.unsplash.com/1600x900/?travel');">
        <div class="text-center bg-white bg-opacity-80 p-8 rounded shadow-md">
            <h1 class="text-4xl font-bold text-blue-600 mb-4">Welcome to Travel App</h1>
            <p class="text-gray-700 text-lg">Pesan perjalananmu dengan mudah!</p>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-16 bg-gray-100 text-center">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-semibold text-blue-600 mb-4">About Us</h2>
            <p class="text-gray-700 max-w-xl mx-auto">Kami adalah layanan travel terpercaya untuk perjalananmu. Nikmati
                pengalaman perjalanan yang aman, nyaman, dan mudah dipesan kapan saja.</p>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-16 text-center">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-semibold text-blue-600 mb-4">Contact Us</h2>
            <p class="text-gray-700">Email: <a href="mailto:info@travelapp.com"
                    class="text-blue-500 hover:underline">info@travelapp.com</a></p>
            <p class="text-gray-700">Phone: <a href="tel:1234567890"
                    class="text-blue-500 hover:underline">123-456-7890</a></p>
        </div>
    </section>

    <!-- Responsive Navbar Toggle -->
    <script>
        const menuBtn = document.getElementById('menu-btn');
        const menu = document.getElementById('menu');

        menuBtn.addEventListener('click', () => {
            menu.classList.toggle('hidden');
        });
    </script>

</body>

</html>

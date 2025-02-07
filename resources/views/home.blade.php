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
                <li><a href="#slider" class="nav-link text-gray-600 hover:text-blue-600">Destination</a></li>
                <li><a href="#footer" class="nav-link text-gray-600 hover:text-blue-600">Contact</a></li>
                <li><a href="{{ url('/login') }}"
                        class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Login</a></li>
            </ul>
        </div>
    </nav>

    <!-- Home-->
    <section id="home" class="h-screen flex items-center justify-center bg-cover bg-center relative"
        style="background-image: url('{{ asset('images/bg-1.jpg') }}'); background-attachment: fixed; background-position: center;">
        <div class="absolute inset-0 bg-black bg-opacity-30"></div>

        <div
            class="text-center bg-white bg-opacity-40 p-12 rounded-xl shadow-lg max-w-lg mx-auto transform scale-x-110 relative z-10">
            <h1 class="text-5xl font-extrabold text-white mb-6">Discover Your Next Adventure</h1>
            <p class="text-gray-100 text-lg mb-6">Jelajahi dunia dengan mudah, pesan tiket perjalananmu hanya dengan
                beberapa klik!</p>
            <a href="#explore"
                class="inline-block bg-blue-600 text-white px-6 py-3 text-lg font-semibold rounded-full hover:bg-blue-700 transition duration-300">Explore
                Now</a>
        </div>
    </section>



    <!-- About -->
    <section id="about" class="py-16 bg-gray-100 text-center">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-semibold text-blue-600 mb-4">About Us</h2>
            <p class="text-gray-700 max-w-xl mx-auto mb-12">Kami adalah layanan travel terpercaya untuk perjalananmu.
                Nikmati pengalaman perjalanan yang aman, nyaman, dan mudah dipesan kapan saja.</p>

            <!-- 3 Cards Section -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Card 1 -->
                <div
                    class="bg-white rounded-lg shadow-lg overflow-hidden transform transition duration-300 hover:scale-105">
                    <img src="{{ asset('images/card-1.jpg') }}" alt="Card 1" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-blue-600 mb-3">Easy Booking</h3>
                        <p class="text-gray-700">Pesan tiket perjalananmu dengan mudah hanya dalam beberapa langkah.
                            Proses cepat dan efisien.</p>
                    </div>
                </div>
                <!-- Card 2 -->
                <div
                    class="bg-white rounded-lg shadow-lg overflow-hidden transform transition duration-300 hover:scale-105">
                    <img src="{{ asset('images/card-2.jpg') }}" alt="Card 2" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-blue-600 mb-3">Safe & Comfortable</h3>
                        <p class="text-gray-700">Nikmati perjalanan yang aman dan nyaman dengan layanan terbaik dari
                            kami, menjamin kenyamananmu.</p>
                    </div>
                </div>
                <!-- Card 3 -->
                <div
                    class="bg-white rounded-lg shadow-lg overflow-hidden transform transition duration-300 hover:scale-105">
                    <img src="{{ asset('images/card-3.jpg') }}" alt="Card 3" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-blue-600 mb-3">24/7 Support</h3>
                        <p class="text-gray-700">Tim kami siap membantu kapan saja. Dukungan pelanggan yang responsif
                            dan siap membantu kapan pun diperlukan.</p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Image Grid Section -->
    <section id="slider" class="py-16 mb-12 bg-gray-100 text-center h-screen">
        <div class="container mx-auto px-4 h-full">
            <h2 class="text-3xl font-semibold text-blue-600 mb-2">Explore Our Destinations</h2>
            <p class="text-gray-700 mb-12 max-w-xl mx-auto mb-12">Tempat-tempat menyerukan yang wajib kalian kunjungi
                saat liburan!</p>

            <!-- Image Grid Container -->
            <div class="grid grid-flow-col grid-rows-2 grid-cols-3 gap-8 h-full relative">
                <!-- Image 1 with Text -->
                <div class="transform scale-110 -rotate-6 relative">
                    <img src="{{ asset('images/bali.jpg') }}" alt="Bali"
                        class="w-full h-full object-cover rounded-lg shadow-lg" loading="lazy">
                    <!-- Text over Image -->
                    <div
                        class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-white font-semibold text-2xl">
                        Bali
                    </div>
                </div>

                <!-- Image 2 with Text -->
                <div class="col-start-3 transform scale-75 rotate-6 translate-x-2 translate-y-15 relative">
                    <img src="{{ asset('images/jogja.jpg') }}" alt="Yogyakarta"
                        class="w-full h-full object-cover rounded-lg shadow-lg" loading="lazy">
                    <!-- Text over Image -->
                    <div
                        class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-white font-semibold text-2xl">
                        Yogyakarta
                    </div>
                </div>

                <!-- Image 3 with Text -->
                <div class="transform scale-150 translate-y-11 relative">
                    <div class="absolute inset-0 bg-black opacity-50"></div>
                    <img src="{{ asset('images/lombok.jpg') }}" alt="Lombok"
                        class="w-full h-full object-cover rounded-lg shadow-lg" loading="lazy">

                    <!-- Text over Image -->
                    <div
                        class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-white font-semibold text-2xl">
                        Lombok
                    </div>
                </div>

                <!-- Image 4 with Text -->
                <div class="transform translate-y-24 relative">
                    <img src="{{ asset('images/pacitan.jpg') }}" alt="Pacitan"
                        class="w-full h-full object-cover rounded-lg shadow-lg" loading="lazy">
                    <!-- Text over Image -->
                    <div
                        class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-white font-semibold text-2xl">
                        Pacitan
                    </div>
                </div>

                <!-- Image 5 with Text -->
                <div class="row-start-1 col-start-2 col-span-2 transform translate-x-20 translate-y-4 relative">
                    <img src="{{ asset('images/bromo.jpg') }}" alt="Bromo"
                        class="w-full h-full object-cover rounded-lg shadow-lg" loading="lazy">
                    <!-- Text over Image -->
                    <div
                        class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-white font-semibold text-2xl">
                        Bromo
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="py-12">
        {{-- untuk space --}}
    </section>



    {{-- Footer --}}
    <footer id="footer" class="text-white py-12 mt-16 relative"
        style="background-image: url('{{ asset('images/bg-2.jpg') }}'); background-attachment: fixed; background-position: center;">
        <div class="absolute inset-0 bg-black opacity-50"></div>

        <div class="container mx-auto px-4 relative z-10">
            <div class="flex flex-col sm:flex-row justify-between items-center space-y-4 sm:space-y-0">
                {{-- Company Info --}}
                <div class="text-center sm:text-left">
                    <h4 class="text-2xl font-semibold mb-2">Travel App</h4>
                    <p class="text-lg">Jelajahi dunia dengan mudah, pesan tiket perjalananmu hanya dengan beberapa
                        klik!</p>
                </div>

                <!-- Contact Info -->
                <div class="text-center sm:text-right">
                    <h5 class="text-lg font-semibold mb-2">Kontak Kami</h5>
                    <p class="text-sm">Email: <a href="mailto:info@travelapp.com"
                            class="hover:underline">info@travelapp.com</a></p>
                    <p class="text-sm">Telepon: <a href="tel:1234567890" class="hover:underline">123-456-7890</a></p>
                </div>
            </div>

            <div class="flex justify-center mt-6 space-x-6">
                <!-- Social Media Links -->
                <a href="#" class="text-white hover:text-blue-400 transition-colors duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="w-6 h-6">
                        <path
                            d="M20 0H4C1.79 0 0 1.79 0 4v16c0 2.21 1.79 4 4 4h16c2.21 0 4-1.79 4-4V4c0-2.21-1.79-4-4-4zM7 18V7h3v11H7zm2.14-12c-1.07 0-1.94-.87-1.94-1.94S8.07 2 9.14 2c1.06 0 1.94.87 1.94 1.94s-.88 1.94-1.94 1.94zM17 18h-3V12c0-1.06-.03-2.28-1.38-2.28-1.38 0-1.6 1.08-1.6 2.2v7.08h-3V7h3v1.49c.42-.65 1.19-1.49 2.58-1.49 2.68 0 3.16 1.75 3.16 4.02v6.99z" />
                    </svg>
                </a>
                <a href="#" class="text-white hover:text-blue-400 transition-colors duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="w-6 h-6">
                        <path
                            d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm0-14c-3.31 0-6 2.69-6 6 0 1.54.56 2.94 1.49 4.04l1.44-1.44c-.43-.7-.68-1.51-.68-2.6 0-2.21 1.79-4 4-4s4 1.79 4 4c0 1.09-.26 1.9-.69 2.6l1.44 1.44c.93-1.1 1.49-2.5 1.49-4.04 0-3.31-2.69-6-6-6z" />
                    </svg>
                </a>
                <a href="#" class="text-white hover:text-blue-400 transition-colors duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="w-6 h-6">
                        <path
                            d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm0-14c-3.31 0-6 2.69-6 6 0 1.54.56 2.94 1.49 4.04l1.44-1.44c-.43-.7-.68-1.51-.68-2.6 0-2.21 1.79-4 4-4s4 1.79 4 4c0 1.09-.26 1.9-.69 2.6l1.44 1.44c.93-1.1 1.49-2.5 1.49-4.04 0-3.31-2.69-6-6-6z" />
                    </svg>
                </a>
            </div>

            <div class="text-center mt-6 text-sm text-gray-300">
                <p>&copy; 2025 Travel App. All rights reserved.</p>
            </div>
        </div>
    </footer>










    <!-- Responsive Navbar Toggle -->
    <script>
        const menuBtn = document.getElementById('menu-btn');
        const menu = document.getElementById('menu');

        menuBtn.addEventListener('click', () => {
            menu.classList.toggle('hidden');
        });

        const prevButton = document.getElementById('prev');
        const nextButton = document.getElementById('next');
        const slides = document.querySelector('.carousel-slide');
        let index = 0;
        const totalSlides = document.querySelectorAll('.carousel-slide > div').length;

        // Fungsi untuk memindahkan slide
        function moveToSlide(index) {
            const slideWidth = document.querySelector('.carousel-slide > div').offsetWidth;
            slides.style.transform = `translateX(-${index * slideWidth}px)`;
        }

        // Navigasi ke slide sebelumnya
        prevButton.addEventListener('click', () => {
            index = (index === 0) ? totalSlides - 1 : index - 1;
            moveToSlide(index);
        });

        // Navigasi ke slide berikutnya
        nextButton.addEventListener('click', () => {
            index = (index === totalSlides - 1) ? 0 : index + 1;
            moveToSlide(index);
        });

        // Fungsi untuk slide otomatis
        // setInterval(() => {
        //     index = (index === totalSlides - 1) ? 0 : index + 1;
        //     moveToSlide(index);
        // }, 5000); // Ganti slide setiap 5 detik
    </script>

</body>

</html>

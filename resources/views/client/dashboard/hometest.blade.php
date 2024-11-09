<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KIYE-SKIN</title>
    @vite(['resources/css/app.css', 'resources/js/app.js']) 
</head>
@extends('client.dashboard.navbar') 
<body>
    <section class="flex flex-col md:flex-row h-screen">
        <div class="flex items-center justify-center w-full md:w-1/2 h-auto">
            <img src="{{ asset('assets/img/gambar3.png') }}" alt="Test Gambar" class="object-cover w-full h-auto">
        </div>

        <div class="w-full md:w-1/2 flex flex-col justify-center items-center px-6 py-12 md:py-48">
            <h1 class="text-3xl md:text-5xl font-bold text-center text-[#2e94a4]">Test Kesehatan Kulit Anda</h1>
            <p class="text-center pt-2 font-light max-w-xl mx-auto mt-4">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempora, voluptates, rem maxime unde, omnis veritatis fuga laboriosam aliquid quisquam molestias qui officia eius! Cum recusandae vero odio, est error cupiditate Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus natus minus sint, reiciendis ex, facilis dolore nihil consequatur aspernatur maiores molestiaee, commodi similique! Eveniet.
            </p>
            <div class="flex justify-center pt-6">
                <a href="javascript:void(0);" onclick="checkLoginStatus()" class="bg-[#2e94a4] rounded-md text-white py-2 px-8 text-sm font-bold md:px-16">Test Sekarang</a>
            </div>
        </div>
    </section>

    <!-- Login Modal -->
    <div id="loginModal" class="hidden fixed inset-0 bg-gray-800 bg-opacity-75 flex items-center justify-center z-50">
        <div class="bg-white rounded-lg p-6 w-11/12 sm:w-96 md:w-1/3">
            <h2 class="text-xl font-semibold text-center mb-4">Anda harus login terlebih dahulu</h2>
            <p class="text-center mb-6">Silakan login untuk melihat deskripsi produk.</p>
            <div class="flex justify-center space-x-4">
                <a href="{{ route('login') }}" class="bg-cyan-600 text-white py-2 px-4 rounded-md hover:bg-cyan-700">Login</a>
                <button onclick="hideLoginModal()" class="bg-gray-600 text-white py-2 px-4 rounded-md hover:bg-gray-700">Tutup</button>
            </div>
        </div>
    </div>

    <!-- JavaScript for Modal -->
    <script>
        // Mengirim status login dari Laravel ke JavaScript
        const isLoggedIn = @json(auth()->check());

        function checkLoginStatus() {
            if (isLoggedIn) {
                // Jika sudah login, langsung diarahkan ke halaman tes
                window.location.href = '/test'; // Ganti dengan URL yang sesuai
            } else {
                // Jika belum login, tampilkan modal login
                showLoginModal();
            }
        }

        // Fungsi untuk menampilkan modal login
        function showLoginModal() {
            document.getElementById('loginModal').classList.remove('hidden');
        }

        // Fungsi untuk menyembunyikan modal login
        function hideLoginModal() {
            document.getElementById('loginModal').classList.add('hidden');
        }
    </script>

<footer class="bg-gray-800 text-white py-4 w-full mt-8">
    <div class="container mx-auto text-center">
        <p class="text-sm">&copy; 2024 Nama Website. All rights reserved.</p>
        <p class="text-sm mt-1">Dibuat dengan <span class="text-red-500">❤</span> oleh Tim Kami</p>
    </div>
</footer>


</body>
</html>

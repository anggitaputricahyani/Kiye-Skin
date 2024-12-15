<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>store</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
@extends('client.dashboard.navbar')

<body>
    <!-- Hero Section -->
    <section id="home" class="pt-24 h-screen flex items-center justify-center text-center text-white relative">
        <!-- Background Image -->
        <div class="absolute inset-0 bg-cover bg-center opacity-70" style="background-image: url('{{ asset('assets/img/gambar200.jpg') }}'); filter: brightness(0.5);"></div>

        <!-- Konten Hero -->
        <div class="relative z-10">
            <h1 class="text-5xl font-bold mb-4 text-[#2e94a4]">Selamat Datang di KIYESKIN Store</h1>
            <p class="text-xl">Produk kecantikan untuk kulit sehat dari kiyeskin</p>
            <a href="#produk-list" class="inline-block my-10 text-white outline outline-2 px-7 py-2 rounded-md hover:bg-[#46e6ff] font-medium">Beli Produk</a>
        </div>
    </section>

    <!-- Produk -->
    <section class="pt-36 pb-32">
        <div class="text-center">
            <h1 class="text-3xl font-bold">Produk Populer</h1>
            <p class="mt-2">Beli Produk skincare sesuai kebutuhan kulit anda</p>
            <div class="pt-6 flex justify-center space-x-11">

                <a href="{{ route('store') }}"
                    class="px-4 py-2 outline outline-[#2e94a4] rounded-full font-bold text-[#1e6e7a] 
              {{ request('kategori') ? '' : 'bg-[#46e6ff]' }}">Semua</a>
                <a href="{{ route('store', ['kategori' => 'Serum']) }}"
                    class="px-8 py-2 outline outline-[#2e94a4] rounded-full font-bold text-[#1e6e7a] 
              {{ request('kategori') == 'Serum' ? 'bg-[#46e6ff]' : '' }}">Serum</a>

                <a href="{{ route('store', ['kategori' => 'Moisturizer']) }}"
                    class="px-4 py-2 outline outline-[#2e94a4] rounded-full font-bold text-[#1e6e7a] 
              {{ request('kategori') == 'Moisturizer' ? 'bg-[#46e6ff]' : '' }}">Moisturizer</a>

                <a href="{{ route('store', ['kategori' => 'SunScreen']) }}"
                    class="px-4 py-2 outline outline-[#2e94a4] rounded-full font-bold text-[#1e6e7a] 
              {{ request('kategori') == 'SunScreen' ? 'bg-[#46e6ff]' : '' }}">SunScreen</a>

                <a href="{{ route('store', ['kategori' => 'Facial Wash']) }}"
                    class="px-4 py-2 outline outline-[#2e94a4] rounded-full font-bold text-[#1e6e7a] 
              {{ request('kategori') == 'Facial Wash' ? 'bg-[#46e6ff]' : '' }}">Facial Wash</a>

                <a href="{{ route('store', ['kategori' => 'Toner']) }}"
                    class="px-4 py-2 outline outline-[#2e94a4] rounded-full font-bold text-[#1e6e7a] 
              {{ request('kategori') == 'Toner' ? 'bg-[#46e6ff]' : '' }}">Toner</a>

                
            </div>


        </div>


        <!-- Produk List -->
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 pt-8" id="produk-list">
            @forelse ($produks as $produk)
            <div class="bg-white shadow-md rounded-md overflow-hidden">
                @if ($produk->gambar)
                <img src="{{ asset('storage/' . $produk->gambar) }}" alt="{{ $produk->nama_produk }}" style="width: 550px;">
                @else
                <p>Gambar tidak tersedia</p>
                @endif
                <div class="p-4">
                    <h3 class="text-lg font-bold text-gray-800">{{ $produk->nama_produk }}</h3>
                    <p class="text-sm text-gray-600 mt-2">{{ Str::limit($produk->deskripsi, 100, '...') }}</p>
                    <p class="text-lg font-semibold text-cyan-600 mt-4">Rp {{ number_format($produk->harga, 0, ',', '.') }}</p>
                    <div class="mt-4 flex-col">
                        <a href="#" class="bg-cyan-600 text-white py-2 px-4 rounded-md hover:bg-cyan-700">Masukan keranjang</a>
                        <a href="#" class="bg-cyan-600 text-white py-2 px-4 rounded-md hover:bg-cyan-700">Beli Sekarang</a>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-span-3 text-center">
                <p>Tidak ada produk tersedia untuk kategori ini.</p>
            </div>
            @endforelse
        </div>



    </section>

    <!-- Login Modal -->
    <div id="loginModal" class="hidden fixed inset-0 bg-gray-800 bg-opacity-75 flex items-center justify-center z-50">
        <div class="bg-white rounded-lg p-6 w-1/2 md:w-1/3">
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
        function showLoginModal() {
            document.getElementById('loginModal').classList.remove('hidden');
        }

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
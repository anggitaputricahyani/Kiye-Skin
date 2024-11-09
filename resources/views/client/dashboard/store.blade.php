<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Store</title>
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
            <h1 class="text-5xl font-bold mb-4 text-[#2e94a4]">Selamat Datang di KIYESKIN STORE</h1>
            <p class="text-xl">Produk kecantikan untuk kulit sehat dari kiyeskin</p>
            <a href="#produk-list" class="inline-block my-10 text-white outline outline-2 px-7 py-2 rounded-md hover:bg-[#46e6ff] font-medium">Beli Produk</a>
        </div>
    </section>

    <!-- Produk -->
    <section class="pt-36 pb-32">
        <div class="text-center">
            <h1 class="text-3xl font-bold">Produk Populer</h1>
            <p class="mt-2">Beli Produk skincare sesuai kebutuhan kulit anda</p>
            <div class=" pt-6 flex justify-center space-x-11  ">
                <a href="" class="px-8 py-2 outline outline-[#2e94a4] rounded-full font-bold text-[#1e6e7a] "> Kulit Kering</a>
                <a href="" class="px-4 py-2 outline outline-[#2e94a4] rounded-full font-bold text-[#1e6e7a]  "> Kulit berminyak</a>
                <a href="" class="px-4 py-2 outline outline-[#2e94a4] rounded-full font-bold text-[#1e6e7a]   "> Kulit berjerawat</a>
            </div>

        </div>

        
        <!-- Produk List -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 pt-16" id="produk-list">
            <!-- Card Produk -->
            <div class="relative flex flex-col bg-white shadow-sm border border-slate-200 rounded-lg p-4 ">
                <div class="relative h-96 overflow-hidden rounded-xl bg-clip-border">
                    <img src="{{ asset('assets/img/produk.jpg') }}" alt="card-image" class="h-full w-full object-cover rounded-md" />
                </div>
                <div class="p-4">
                    <div class="mb-2 flex items-center justify-between">
                   <a href="/detailproduk" class="text-slate-800 text-xl font-semibold">Sunscreen Kiyeskin</a>
                        <p class="text-cyan-600 text-xl font-semibold">Rp.95.000</p>
                    </div>
                    <p class="text-slate-600 leading-normal font-light">
                        Debitis placeat ratione ad unde inventore laboriosam itaque, dolor dignissimos numquam eius dicta asperiores quia.
                    </p>
                    @auth
                        <button class="rounded-md mt-6 bg-cyan-600 py-2 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-cyan-700">
                            Lihat Deskripsi
                        </button>
                    @else
                        <button onclick="showLoginModal()" class="rounded-md mt-6 bg-cyan-600 py-2 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-cyan-700">
                            Lihat Deskripsi
                        </button>
                    @endauth
                </div>
            </div>


            <div class="relative flex flex-col bg-white shadow-sm border border-slate-200 rounded-lg p-4">
                <div class="relative h-96 overflow-hidden rounded-xl bg-clip-border">
                    <img src="{{ asset('assets/img/produk.jpg') }}" alt="card-image" class="h-full w-full object-cover rounded-md" />
                </div>
                <div class="p-4">
                    <div class="mb-2 flex items-center justify-between">
                        <a href="/detailproduk" class="text-slate-800 text-xl font-semibold"> Sunscreen Kiyeskin</a>
                        <p class="text-cyan-600 text-xl font-semibold">Rp.95.000</p>
                    </div>
                    <p class="text-slate-600 leading-normal font-light">
                        Debitis placeat ratione ad unde inventore laboriosam itaque, dolor dignissimos numquam eius dicta asperiores quia.
                    </p>
                    @auth
                        <button class="rounded-md mt-6 bg-cyan-600 py-2 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-cyan-700">
                            Lihat Deskripsi
                        </button>
                    @else
                        <button onclick="showLoginModal()" class="rounded-md mt-6 bg-cyan-600 py-2 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-cyan-700">
                            Lihat Deskripsi
                        </button>
                    @endauth
                </div>
            </div>

            <div class="relative flex flex-col bg-white shadow-sm border border-slate-200 rounded-lg p-4">
                <div class="relative h-96 overflow-hidden rounded-xl bg-clip-border">
                    <img src="{{ asset('assets/img/produk.jpg') }}" alt="card-image" class="h-full w-full object-cover rounded-md" />
                </div>
                <div class="p-4">
                    <div class="mb-2 flex items-center justify-between">
                    <a href="/detailproduk" class="text-slate-800 text-xl font-semibold"> Sunscreen Kiyeskin</a>
                        <p class="text-cyan-600 text-xl font-semibold">Rp.95.000</p>
                    </div>
                    <p class="text-slate-600 leading-normal font-light">
                        Debitis placeat ratione ad unde inventore laboriosam itaque, dolor dignissimos numquam eius dicta asperiores quia.
                    </p>
                    @auth
                        <button class="rounded-md mt-6 bg-cyan-600 py-2 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-cyan-700">
                            Lihat Deskripsi
                        </button>
                    @else
                        <button onclick="showLoginModal()" class="rounded-md mt-6 bg-cyan-600 py-2 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-cyan-700">
                            Lihat Deskripsi
                        </button>
                    @endauth
                </div>
            </div>

            <div class="relative flex flex-col bg-white shadow-sm border border-slate-200 rounded-lg p-4">
                <div class="relative h-96 overflow-hidden rounded-xl bg-clip-border">
                    <img src="{{ asset('assets/img/produk.jpg') }}" alt="card-image" class="h-full w-full object-cover rounded-md" />
                </div>
                <div class="p-4">
                    <div class="mb-2 flex items-center justify-between">
                    <a href="/detailproduk" class="text-slate-800 text-xl font-semibold"> Sunscreen Kiyeskin</a>
                        <p class="text-cyan-600 text-xl font-semibold">Rp.95.000</p>
                    </div>
                    <p class="text-slate-600 leading-normal font-light">
                        Debitis placeat ratione ad unde inventore laboriosam itaque, dolor dignissimos numquam eius dicta asperiores quia.
                    </p>
                    @auth
                        <button class="rounded-md mt-6 bg-cyan-600 py-2 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-cyan-700">
                            Lihat Deskripsi
                        </button>
                    @else
                        <button onclick="showLoginModal()" class="rounded-md mt-6 bg-cyan-600 py-2 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-cyan-700">
                            Lihat Deskripsi
                        </button>
                    @endauth
                </div>
            </div>

            <div class="relative flex flex-col bg-white shadow-sm border border-slate-200 rounded-lg p-4">
                <div class="relative h-96 overflow-hidden rounded-xl bg-clip-border">
                    <img src="{{ asset('assets/img/produk.jpg') }}" alt="card-image" class="h-full w-full object-cover rounded-md" />
                </div>
                <div class="p-4">
                    <div class="mb-2 flex items-center justify-between">
                    <a href="/detailproduk" class="text-slate-800 text-xl font-semibold"> Sunscreen Kiyeskin</a>
                        <p class="text-cyan-600 text-xl font-semibold">Rp.95.000</p>
                    </div>
                    <p class="text-slate-600 leading-normal font-light">
                        Debitis placeat ratione ad unde inventore laboriosam itaque, dolor dignissimos numquam eius dicta asperiores quia.
                    </p>
                    @auth
                        <button class="rounded-md mt-6 bg-cyan-600 py-2 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-cyan-700">
                            Lihat Deskripsi1
                        </button>
                    @else
                        <button onclick="showLoginModal()" class="rounded-md mt-6 bg-cyan-600 py-2 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-cyan-700">
                            beli sekarang
                        </button>
                    @endauth
                </div>
            </div>

            
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
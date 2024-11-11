<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
<header class="bg-white shadow fixed top-0 left-0 right-0 z-50">
    <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
        <div class="flex items-center">
            <!-- Tombol gambar menuju homepage -->
            <a href="/home">
                <img src="{{ ('assets/loginpict/logo.png') }}" alt="Logo" class="w-10 h-10 rounded-full mr-2">
            </a>
            <h1 class="text-4xl font-bold text-[#2e94a4]">KIYE-SKIN</h1>
        </div>
        
        <div class="hidden md:flex space-x-6 text-xl items-center">
            <a href="/home" class="text-[#2e94a4] hover:text-[#46e6ff]">Home</a>
            <a href="{{ url('/#about-us') }}" class="text-[#2e94a4] hover:text-[#46e6ff]">About Us</a>
            <a href="/store" class="text-[#2e94a4] hover:text-[#46e6ff]">Store</a>
            <a href="/hometest" class="text-[#2e94a4] hover:text-[#46e6ff]">Skin Check</a>


            @auth
<div class="relative">
    <button class="flex items-center bg-[#2e94a4] p-2 rounded-full hover:bg-gray-300" onclick="toggleDropdown()">
        <span class="flex items-center justify-center w-8 h-8 bg-gray-400 text-white rounded-full">
            {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
        </span>
        <svg class="w-4 h-4 ml-2 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
        </svg>
    </button>
    <div id="userDropdown" class="hidden absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg z-20">
        <a href="/profile" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Profile</a>
        <a href="{{ route('logout') }}" class="block px-4 py-2 text-gray-800 hover:bg-gray-100"
           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
           Logout
        </a>
    </div>
</div>
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>

<!-- Icon Keranjang untuk Pengguna yang Login -->
<a href="/cart" class="relative">
    <img src="{{ asset('assets/img/keranjang.jpg') }}" alt="Cart" class="w-8 h-8 text-[#2e94a4] hover:text-[#46e6ff]">
    <!-- Badge jumlah item di keranjang -->
    <span class="absolute top-0 right-0 bg-red-500 text-white text-xs font-semibold px-1.5 py-0.5 rounded-full">
        3 <!-- Contoh jumlah item di keranjang -->
    </span>
</a>
@else
<!-- Tombol Login -->
<a href="/login" class="px-10 py-2 bg-[#2e94a4] text-white rounded-full hover:bg-[#46e6ff]">Login</a>

<!-- Icon Keranjang yang Memicu Pop-up Login untuk Pengguna yang Belum Login -->
<a href="javascript:void(0);" onclick="showLoginPopup()" class="relative">
    <img src="{{ asset('assets/img/keranjang.jpg') }}" alt="Cart" class="w-8 h-8 text-[#2e94a4] hover:text-[#46e6ff]">
    <span class="absolute top-0 right-0 bg-red-500 text-white text-xs font-semibold px-1.5 py-0.5 rounded-full">
        3 <!-- Contoh jumlah item di keranjang -->
    </span>
</a>
@endauth

<!-- Pop-up Login -->
<div id="loginPopup" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
    <div class="bg-white p-6 rounded-lg shadow-lg text-center">
        <h2 class="text-2xl font-bold mb-4">Silakan Login</h2>
        <p class="mb-4">Anda perlu login untuk mengakses keranjang.</p>
        <a href="/login" class="px-4 py-2 bg-[#2e94a4] text-white rounded hover:bg-[#46e6ff]">Login</a>
        <button onclick="closePopup()" class="mt-2 text-gray-500 hover:text-gray-700">Batal</button>
    </div>
</div>

<script>
    // Menampilkan pop-up login
    function showLoginPopup() {
        document.getElementById("loginPopup").classList.remove("hidden");
    }

    // Menutup pop-up login
    function closePopup() {
        document.getElementById("loginPopup").classList.add("hidden");
    }

    // Fungsi untuk menutup dropdown saat klik di luar
    function toggleDropdown() {
        var dropdown = document.getElementById("userDropdown");
        dropdown.classList.toggle("hidden");
    }
    
    window.onclick = function(event) {
        if (!event.target.closest('.bg-[#2e94a4]')) {
            document.getElementById("userDropdown")?.classList.add("hidden");
        }
    }
</script>


        <button class="md:hidden text-white focus:outline-none" id="menu-btn">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
            </svg>
        </button>
    </div>
</header>

<!-- JavaScript untuk Dropdown -->
<script>
    function toggleDropdown() {
        var dropdown = document.getElementById("userDropdown");
        dropdown.classList.toggle("hidden");
    }

    window.onclick = function(event) {
        if (!event.target.matches('.bg-[#2e94a4]')) {
            var dropdowns = document.getElementsByClassName("absolute");
            for (var i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (!openDropdown.classList.contains('hidden')) {
                    openDropdown.classList.add('hidden');
                }
            }
        }
    }
</script>
</body>
</html>

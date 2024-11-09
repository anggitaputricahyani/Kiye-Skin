<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keranjang Belanja</title>
    <!-- Pastikan Tailwind CSS terhubung -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="relative">
@include('client.dashboard.navbar')

<!-- Bagian Konten Utama -->
<section class="container mx-auto">
    <div class="flex items-center justify-center ml-40 mt-10">
        <img src="{{ 'assets/img/produk.jpg' }}" alt="Produk" class="w-1/3 mt-20 rounded-xl">
        <div class="ml-20 py-16 h-96 ">
            <h1 class="font-bold text-3xl">Sunscreen KIYESKIN</h1>
            <h2 class="mt-2 font-semibold">Deskripsi Produk</h2>
            <p class="text-balance font-light">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rem enim optio quaerat est dicta quisquam nisi illo, saepe, tempore rerum omnis laboriosam? Laboriosam at quo libero placeat illum ad quis? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nam, aut perferendis? Dolorem sit ea atque quo ex incidunt adipisci sequi consequuntur! Delectus ipsam, consequatur itaque amet ex quam alias nulla.</p>
            <div class="flex">
                <h1 class="font-bold mt-3">Kategori :</h1>
                <h1 class="mt-3 ml-5">Sunscreen</h1>
            </div>
            <div class="flex mt-3">
                <div class="flex items-center space-x-2">
                    <button class="px-3 py-1 text-gray-700 bg-gray-200 rounded-l hover:bg-gray-300" onclick="decrement()"> - </button>
                    <input type="text" id="kuantitas" value="1" class="w-12 text-center border border-gray-300 focus:outline-none" readonly>
                    <button class="px-3 py-1 text-gray-700 bg-gray-200 rounded-r hover:bg-gray-300" onclick="increment()"> + </button>
                </div>
                <!-- Tombol Tambah Keranjang -->
                <button onclick="toggleSidebar()" class="ml-6 bg-[#2e94a4] px-6 py-2 text-white rounded-md hover:bg-blue-300">
                    Tambah Keranjang
                </button>
            </div>
        </div>
    </div>
</section>

<!-- Overlay -->
<div id="overlay" class="fixed inset-0 bg-black opacity-50 hidden" onclick="toggleSidebar()"></div>

<!-- Sidebar -->
<div id="cartSidebar" class="fixed top-0 right-0 w-96 h-full bg-white shadow-lg transform translate-x-full transition-transform duration-300 ease-in-out z-50 p-4">
    <button onclick="toggleSidebar()" class="text-gray-500 text-2xl float-right">&times;</button>
    <h2 class="text-xl font-bold mt-4 mb-10">Keranjang Anda</h2>
    <div class="flex items-center mt-4">
        <img src="{{ 'assets/img/produk.jpg' }}" alt="Product Image" class="w-16 h-16 rounded-md">
        <div class="ml-4">
            <h3 class="text-lg font-semibold">Sunscreen KIYESKIN</h3>
            <p>Jumlah: <span id="cartQuantity">1</span></p>
            <p>Harga: <span class="font-bold">Rp 95.000</span></p>
        </div>
    </div>
    <div class="mt-20 text-center text-2xl font-bold">
        <h3>Subtotal: <span class="font-bold text-green-500">Rp95.000,00</span></h3>
    </div>
    <div class="mt-6">
        <button class="w-full py-2 text-black bg-white outline outline-2     rounded-md">View Cart</button>
    </div>
    
    <div class="mt-6">
        <button class="w-full py-2 text-white bg-black rounded-md">Check Out</button>
    </div>
</div>

<script>
    


    function increment() {
        const kuantitasInput = document.getElementById("kuantitas");
        let kuantitas = parseInt(kuantitasInput.value, 10) || 0;
        kuantitasInput.value = kuantitas + 1;
    }

    function decrement() {
        const kuantitasInput = document.getElementById("kuantitas");
        let kuantitas = parseInt(kuantitasInput.value, 10) || 1;
        if (kuantitas > 1) {
            kuantitasInput.value = kuantitas - 1;
        }
    }

    function toggleSidebar() {
        const sidebar = document.getElementById("cartSidebar");
        const overlay = document.getElementById("overlay");
        const cartQuantity = document.getElementById("cartQuantity");
        const kuantitasInput = document.getElementById("kuantitas");

        // Mengubah nilai kuantitas di sidebar sesuai dengan input
        cartQuantity.textContent = kuantitasInput.value;

        // Toggle kelas CSS untuk menampilkan atau menyembunyikan sidebar dan overlay
        sidebar.classList.toggle("translate-x-0");
        sidebar.classList.toggle("translate-x-full");
        overlay.classList.toggle("hidden");
    }
</script>
</body>
</html>

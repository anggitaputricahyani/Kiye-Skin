<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Produk</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    @include('client.dashboard.navbar')

<section class="container mx-auto px-4 sm:px-6 lg:px-8 mt-32">
        <div class="flex flex-col sm:flex-row items-center sm:items-start">
            <!-- Gambar Produk -->
            <img src="{{ asset('storage/' . $produk->gambar) }}" alt="{{ $produk->nama }}" class="w-full sm:w-1/3 mt-6 sm:mt-0 rounded-xl max-w-sm">

            <!-- Detail Produk -->
            <div class="w-full sm:w-2/3 sm:ml-10 py-6 sm:py-12">
                <h1 class="font-bold text-2xl sm:text-3xl">{{ $produk->nama_produk }}</h1>
                <h2 class="mt-2 font-semibold">Deskripsi Produk</h2>
                <p class="text-gray-700 font-light break-words overflow-wrap break-word">{{ $produk->deskripsi }}</p>
                <h2 class=" font-semibold text-xs  "> Stok Produk : {{$produk->stok}} </h2>
                <h2 class=" font-bold text-sky-950 text-lg"> Rp{{ number_format($produk->harga, 0, ',', '.') }}</h2>

        
                
                <div class="flex flex-wrap items-center mt-4">
                    <div class="flex items-center space-x-2">
                        <button class="px-3 py-1 text-gray-700 bg-gray-200 rounded-l hover:bg-gray-300" onclick="decrement()"> - </button>
                        <input type="text" id="kuantitas" value="1" class="w-12 text-center border border-gray-300 focus:outline-none" readonly>
                        <button class="px-3 py-1 text-gray-700 bg-gray-200 rounded-r hover:bg-gray-300" onclick="increment()"> + </button>
                    </div>
                    <!-- Tombol Tambah Keranjang -->
                    @if(Auth::check())
                        <!-- Tombol Tambah Keranjang Jika Sudah Login -->
                        <button type="button" onclick="toggleSidebar()" class="ml-6 bg-sky-950 px-6 py-2 text-white rounded-md hover:bg-sky-700">
                            Tambah Keranjang
                        </button>
                    @else
                        <!-- Tombol Login Jika Belum Login -->
                        <a href="/loginuser" class="ml-6 bg-gray-700 px-6 py-2 text-white rounded-md hover:bg-gray-600">
                            Tambah Keranjang
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </section>

    <div id="overlay" class="fixed inset-0 bg-black opacity-50 hidden" onclick="toggleSidebar()"></div>
    <div id="cartSidebar" class="fixed top-0 right-0 w-96 h-full bg-white shadow-lg transform translate-x-full transition-transform duration-300 ease-in-out z-50 p-4">
        <button onclick="toggleSidebar()" class="text-gray-500 text-2xl float-right">&times;</button>
        <h2 class="text-xl font-bold mt-4 mb-10">Keranjang Anda</h2>
        <div class="flex items-center mt-4">
            <img src="{{ asset('storage/' . $produk->gambar) }}" alt="{{ $produk->nama }}" class="w-full h-48 object-cover  max-w-36  ">
            <div class="ml-4">
                <h3 class="text-lg font-semibold">{{ $produk->nama }}</h3>
                <p>Jumlah: <span id="cartQuantity">1</span></p> <!-- Display jumlah di sini -->
                <p>Harga: <span id="productPrice" class="font-bold">Rp{{ number_format($produk->harga, 0, ',', '.') }}</span></p> <!-- Display harga di sini -->
            </div>
        </div>
        <div class="mt-20 text-center text-2xl font-bold">
            <h3>Total Harga: <span id="totalPrice" class="font-bold text-green-700">Rp{{ number_format($produk->harga, 0, ',', '.') }}</span></h3>
        </div>
        <form id="checkoutForm" action="javascript:void(0)" method="POST" class="flex justify-center mt-3">
            @csrf
            <input type="hidden" name="jumlah" id="jumlahHidden" value="1"> <!-- Sesuaikan jumlah produk -->
            <a href="#" class="bg-sky-950 text-white px-4 py-2 rounded hover:bg-sky-700">
    Checkout
</a>
        </form>
    </div>

    <script>
        function toggleSidebar() {
            const sidebar = document.getElementById('cartSidebar');
            const overlay = document.getElementById('overlay');

            if (sidebar.style.transform === 'translateX(0%)') {
                sidebar.style.transform = 'translateX(100%)';
                overlay.classList.add('hidden');
            } else {
                sidebar.style.transform = 'translateX(0%)';
                overlay.classList.remove('hidden');
            }
        }

        function increment() {
            const kuantitas = document.getElementById("kuantitas");
            kuantitas.value = parseInt(kuantitas.value) + 1;
            document.getElementById("jumlahHidden").value = kuantitas.value;
            updateTotalPrice();
            updateCartQuantity(); // Memperbarui jumlah di sidebar
            updateProductPrice(); // Memperbarui harga berdasarkan jumlah
        }

        function decrement() {
            const kuantitas = document.getElementById("kuantitas");
            if (parseInt(kuantitas.value) > 1) {
                kuantitas.value = parseInt(kuantitas.value) - 1;
                document.getElementById("jumlahHidden").value = kuantitas.value;
                updateTotalPrice();
                updateCartQuantity(); // Memperbarui jumlah di sidebar
                updateProductPrice(); // Memperbarui harga berdasarkan jumlah
            }
        }

        function updateTotalPrice() {
            const harga = {{ $produk->harga }};
            const kuantitas = document.getElementById("kuantitas").value;
            const totalPrice = harga * kuantitas;
            document.getElementById("totalPrice").innerText = 'Rp' + totalPrice.toLocaleString('id-ID');
        }

        function updateCartQuantity() {
            const kuantitas = document.getElementById("kuantitas").value;
            document.getElementById("cartQuantity").innerText = kuantitas; // Memperbarui jumlah di sidebar
        }

        function updateProductPrice() {
            const harga = {{ $produk->harga }};
            const kuantitas = document.getElementById("kuantitas").value;
            const totalProductPrice = harga * kuantitas;
            document.getElementById("productPrice").innerText = 'Rp' + totalProductPrice.toLocaleString('id-ID'); // Memperbarui harga produk
        }
    </script>
</body>

</html>

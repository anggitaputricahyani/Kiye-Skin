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
            <img src="{{ asset('storage/' . $produk->gambar) }}" alt="{{ $produk->nama_produk }}"
                class="w-full sm:w-1/3 mt-6 sm:mt-0 rounded-xl max-w-sm">

            <!-- Detail Produk -->
            <div class="w-full sm:w-2/3 sm:ml-10 py-6 sm:py-12">
                <h1 class="font-bold text-2xl sm:text-3xl">{{ $produk->nama_produk }}</h1>
                <h2 class="mt-2 font-semibold">Deskripsi Produk</h2>
                <p class="text-gray-700 font-light break-words overflow-wrap break-word">{{ $produk->deskripsi }}</p>
                <h2 class="font-semibold text-xs">Stok Produk: {{ $produk->stok }}</h2>
                <h2 class="font-bold text-sky-950 text-lg">Rp{{ number_format($produk->harga, 0, ',', '.') }}</h2>

                <div class="flex flex-wrap items-center mt-4">
                    <!-- Kuantitas -->
                    <div class="flex items-center space-x-2">
                        <button class="px-3 py-1 text-gray-700 bg-gray-200 rounded-l hover:bg-gray-300"
                            onclick="decrement()"> - </button>
                        <input type="text" id="kuantitas" value="1"
                            class="w-12 text-center border border-gray-300 focus:outline-none" readonly>
                        <button class="px-3 py-1 text-gray-700 bg-gray-200 rounded-r hover:bg-gray-300"
                            onclick="increment()"> + </button>
                    </div>

                    <!-- Tombol Tambah Keranjang -->
                    @if (Auth::check())
                        <button type="button" id="addToCartBtn"
                            class="ml-6 bg-sky-950 px-6 py-2 text-white rounded-md hover:bg-sky-700">
                            Tambah Keranjang
                        </button>
                    @else
                        <a href="/loginuser" class="ml-6 bg-gray-700 px-6 py-2 text-white rounded-md hover:bg-gray-600">
                            Login
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </section>

    <!-- Pop-up Konfirmasi -->
    <div id="successPopup" class="fixed inset-0 flex items-center justify-center bg-gray-900 bg-opacity-50 z-50 hidden">
        <div class="bg-white p-6 rounded shadow-lg">
            <h2 class="text-xl font-bold">Produk Berhasil Ditambahkan ke Keranjang!</h2>
            <button onclick="closePopup()" class="mt-4 bg-sky-950 text-white px-4 py-2 rounded hover:bg-sky-700">
                Tutup
            </button>
        </div>
    </div>

    <script>
        // Fungsi untuk menambah kuantitas
        function increment() {
            const kuantitas = document.getElementById("kuantitas");
            kuantitas.value = parseInt(kuantitas.value) + 1;
        }

        // Fungsi untuk mengurangi kuantitas
        function decrement() {
            const kuantitas = document.getElementById("kuantitas");
            if (parseInt(kuantitas.value) > 1) {
                kuantitas.value = parseInt(kuantitas.value) - 1;
            }
        }

        // Fungsi untuk menutup popup sukses
        function closePopup() {
            document.getElementById("successPopup").classList.add("hidden");
        }

        // Fungsi untuk mengirim data ke keranjang menggunakan AJAX
        document.getElementById('addToCartBtn').addEventListener('click', function () {
            const kuantitas = document.getElementById("kuantitas").value;

            fetch('{{ route('cart.add', ['produkId' => $produk->id]) }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({
                    kuantitas: kuantitas
                })
            })
            .then(response => response.json())
            .then(data => {
                if (data.message) {
                    // Tampilkan notifikasi sukses
                    document.getElementById("successPopup").classList.remove("hidden");
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });
        });
    </script>
</body>

</html>

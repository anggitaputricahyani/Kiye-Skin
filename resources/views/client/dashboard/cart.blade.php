<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kiye-Skin Shopping Cart</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>
<body class="bg-gray-100 font-sans">

    <div class="h-screen bg-gray-100 pt-20">
        <!-- User Address Section -->
        <div class="mb-6 px-6 py-4 bg-white rounded-lg shadow-md">
            <h2 class="text-lg font-bold text-gray-900">Alamat Pengiriman</h2>
            <label for="address-input" class="block text-gray-700 mt-2">Masukkan Alamat:</label>
            <textarea id="address-input" name="address" rows="3" class="mt-1 block w-full px-3 py-2 text-gray-700 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-blue-300" placeholder="Contoh: Jl. Contoh Alamat No. 123, Kota Contoh, Indonesia"></textarea>
        </div>

        <h1 class="mb-10 text-center text-2xl font-bold">Cart Items</h1>
        <div class="mx-auto max-w-5xl justify-center px-6 md:flex md:space-x-6 xl:px-0">
            <div class="rounded-lg md:w-3/4">
                @forelse ($keranjang as $item)
                <!-- Cart Item -->
                <div class="justify-between mb-6 rounded-lg bg-white p-6 shadow-md sm:flex sm:justify-start">
                    <div class="w-full sm:w-40 sm:mr-4">
                        <img src="{{ asset('storage/' . $item->produk->gambar) }}" alt="{{ $item->produk->nama_produk }}"
                             class="w-full h-40 object-cover rounded-lg border" />
                    </div>
                    <div class="sm:flex sm:w-full sm:justify-between">
                        <div class="mt-5 sm:mt-0">
                            <h2 class="text-lg font-bold text-gray-900">{{ $item->produk->nama_produk }}</h2>
                            <p class="mt-1 text-xs text-gray-700">Kategori: {{ $item->produk->kategori }}</p>
                        </div>
                        <div class="mt-4 flex justify-between sm:space-y-6 sm:mt-0 sm:block sm:space-x-6">
                            <div class="flex items-center border-gray-100">
                                <button onclick="updateCart({{ $item->produk_id }}, {{ $item->kuantitas - 1 }})" class="cursor-pointer rounded-l bg-gray-100 py-1 px-3.5 duration-100 hover:bg-blue-500 hover:text-white">-</button>
                                <input id="quantity-{{ $item->produk_id }}" class="h-8 w-8 border bg-white text-center text-xs outline-none" type="number"
                                       value="{{ $item->kuantitas }}" min="1" readonly />
                                <button onclick="updateCart({{ $item->produk_id }}, {{ $item->kuantitas + 1 }})" class="cursor-pointer rounded-r bg-gray-100 py-1 px-3 duration-100 hover:bg-blue-500 hover:text-white">+</button>
                            </div>
                            <div class="flex items-center space-x-4">
                                <p class="text-sm">Rp{{ number_format($item->produk->harga * $item->kuantitas, 0, ',', '.') }}</p>
                                <button onclick="removeFromCart({{ $item->produk_id }})" class="text-red-500 hover:text-red-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                         stroke="currentColor" class="h-5 w-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                <p class="text-center text-gray-500">Keranjang Anda kosong</p>
                @endforelse
            </div>
            <!-- Subtotal Section -->
            <div class="mt-6 h-full rounded-lg border bg-white p-6 shadow-md md:mt-0 md:w-2/3">
                <div class="mb-2 flex justify-between">
                    <p class="text-gray-700">Subtotal</p>
                    <p class="text-gray-700">Rp{{ number_format($keranjang->sum(fn($item) => $item->produk->harga * $item->kuantitas), 0, ',', '.') }}</p>
                </div>
                <div class="flex justify-between">
                    <p class="text-gray-700">Shipping</p>
                    <p class="text-gray-700">Gratis</p>
                </div>
                <hr class="my-4" />
                <div class="flex justify-between">
                    <p class="text-lg font-bold">Total</p>
                    <div>
                        <p class="mb-1 text-lg font-bold">Rp{{ number_format($keranjang->sum(fn($item) => $item->produk->harga * $item->kuantitas), 0, ',', '.') }}</p>
                        <p class="text-sm text-gray-700">Termasuk PPN</p>
                    </div>
                </div>
                {% if user.is_authenticated %}
                <button id="pay-button" data-total="{{ $keranjang->sum(fn($item) => $item->produk->harga * $item->kuantitas) }}" 
                    class="w-full bg-blue-500 text-white font-bold py-2 px-4 rounded hover:bg-blue-600">
                    Bayar Sekarang
                </button>

            </div>
        </div>
    </div> 

    <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="SB-Mid-client-pT0bluLjOREMQliz"></script>
    <script>
        function updateCart(productId, newQuantity) {
            axios.post(`/keranjang/update/${productId}`, { kuantitas: newQuantity })
                .then(() => location.reload())
                .catch(console.error);
        }

        function removeFromCart(productId) {
            axios.delete(`/keranjang/hapus/${productId}`)
                .then(() => location.reload())
                .catch(console.error);
        }

        document.getElementById('pay-button').onclick = function () {
            const totalAmount = this.getAttribute('data-total');
            axios.post('/payment/create-order', { amount: parseInt(totalAmount), name: "Nama Pelanggan", email: "coba@coba.com" })
                .then(response => {
                    return axios.post('/payment/snap-token', {
                        order_id: response.data.order.order_id,
                        amount: response.data.order.amount,
                        email: response.data.order.email,
                        name: response.data.order.name
                    });
                })
                .then(response => {
                    snap.pay(response.data.snap_token, {
                        onSuccess: function(result) {
                            alert("Pembayaran berhasil!");
                            console.log(result);
                        },
                        onPending: function(result) {
                            alert("Menunggu pembayaran...");
                            console.log(result);
                        },
                        onError: function(result) {
                            alert("Pembayaran gagal.");
                            console.log(result);
                        }
                    });
                })
                .catch(console.error);
        };
    </script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KiyeSkin Checkout</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 font-sans">
    <header class="bg-orange-500 p-4 flex justify-between items-center">
        <a href="/" class="text-blue text-xl font-bold">Kiye-Skin</a>
        <input type="text" id="search-placeholder" placeholder="Nikmati Diskon Kiye-Skin : 15% lebih hemat" class="rounded-full px-4 py-2 w-1/3">
        <div class="flex items-center space-x-4">
            <button id="notification-text" class="text-black">Notifikasi</button>
            <a href="https://wa.me/6288224154244" id="help-text" class="text-black">Bantuan</a>
        </div>
    </header>

    

    <div class="container mx-auto p-6">
        <h2 class="text-2xl font-bold mb-4">Checkout</h2>

        <div class="container mx-auto mt-10 grid grid-cols-1 gap-4">
            <!-- Left Section: Address and Product Information -->
            <div>
               
    <!-- Button Tambah Alamat Baru -->
    <div class="bg-white p-6 rounded-lg shadow mb-4">
        <button onclick="showAddressForm()" class="border-2 border-dashed border-gray-300 p-4 text-center rounded w-full font-bold">
            Tambah Alamat Baru
        </button>
    </div>

    <!-- Form Alamat Baru (Hidden by default) -->
    <div id="addressForm" class="bg-white bg-opacity-50 p-6 rounded-lg shadow-lg fixed inset-0 flex items-center justify-center hidden">
        <div class="bg-white p-8 rounded-lg w-full max-w-md">
            <h2 class="text-xl font-bold mb-4">Alamat Baru</h2>
            <form>
                <div class="mb-4">
                    <input type="text" placeholder="Nama Lengkap" class="w-full p-3 border border-gray-300 rounded">
                </div>
                <div class="mb-4">
                    <input type="text" placeholder="Nomor Telepon" class="w-full p-3 border border-gray-300 rounded">
                </div>
                <div class="mb-4">
                    <select class="w-full p-3 border border-gray-300 rounded">
                        <option>Provinsi, Kota, Kecamatan, Kode Pos</option>
                    </select>
                </div>
                <div class="mb-4">
                    <input type="text" placeholder="Nama Jalan, Gedung, No. Rumah" class="w-full p-3 border border-gray-300 rounded">
                </div>
                <div class="mb-4">
                    <input type="text" placeholder="Detail Lainnya (Cth: Blok / Unit No., Patokan)" class="w-full p-3 border border-gray-300 rounded">
                </div>
                <div class="mb-4 bg-gray-100 p-4 text-center rounded">
                    <button type="button" class="text-gray-500 font-bold">+ Tambah Lokasi</button>
                </div>
                <div class="mb-4">
                    <p class="font-semibold">Tandai Sebagai:</p>
                    <div class="flex space-x-2 mt-2">
                        <button type="button" class="px-4 py-2 border border-gray-300 rounded">Rumah</button>
                        <button type="button" class="px-4 py-2 border border-gray-300 rounded">Kantor</button>
                        <button type="button" class="ml-auto text-gray-500">Nanti Saja</button>
                    </div>
                </div>
                <div class="flex justify-end mt-4">
                    <button type="button" onclick="hideAddressForm()" class="bg-orange-500 text-white px-4 py-2 rounded">OK</button>
                </div>
            </form>
        </div>
    </div>
        
                <!-- Product Information Section -->
                <div class="bg-white p-6 rounded-lg shadow mb-4">
                    <div class="flex items-start mb-4">
                        <img src="{{ asset('assets/img/produk.jpg') }}" alt="Product Image" class="w-20 h-20 object-cover mr-4">
                        <div>
                            <h2 class="text-lg font-bold">Sunscreen KiyeSkin</h2>
                            <p class="text-green-600 font-bold">RP.95.000,00</p>
                            <p class="text-gray-600 mt-1">Lorem ipsum dolor sit amet consectetur. Herhendrit habitasse risus sit interdum dui leo. Cras et malesuada et ut necveh.</p>
                        </div>
                    </div>

                    <!-- Product Checkout -->
                    <div class="w-full bg-white border-t border-b border-gray-300 py-4 px-6 flex items-center justify-between">
                        <p class="text-black font-bold">Metode Pembayaran</p>
                        <div class="flex items-center">
                            <img id="paymentLogo" src="{{ asset('assets/checkout/cod.jpg') }}" alt="cod Logo" class="w-8 h-6 mr-2">
                            <span id="paymentMethod" class="font-semibold text-black">COD</span>
                        </div>
                        <button onclick="toggleDropdown()" class="w-5 h-5 text-gray-700 focus:outline-none">
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </button>
        
                        <!-- Dropdown menu utama -->
                        <div id="dropdownMenu" class="hidden absolute top-12 right-0 w-48 bg-white border border-gray-300 rounded-lg shadow-lg">
                            <ul class="py-2">
                                <li><a href="#" onclick="selectPayment('Dana', '{{ asset('assets/checkout/dana.jpg') }}')" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Dana</a></li>
                                <li><a href="#" onclick="selectPayment('OVO', '{{ asset('assets/checkout/ovo.jpg') }}')" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">OVO</a></li>
                                <li class="relative">
                                    <a href="#" onclick="toggleBankDropdown()" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 flex items-center justify-between">
                                        Bank Transfer
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </a>
                                    <div id="bankDropdown" class="hidden absolute top-0 left-full ml-2 w-48 bg-white border border-gray-300 rounded-lg shadow-lg">
                                        <ul class="py-2">
                                            <li><a href="#" onclick="selectPayment('BCA', '{{ asset('assets/checkout/bca.jpg') }}')" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">BCA</a></li>
                                            <li><a href="#" onclick="selectPayment('BRI', '{{ asset('assets/checkout/bri.jpg') }}')" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">BRI</a></li>
                                            <li><a href="#" onclick="selectPayment('BNI', '{{ asset('assets/checkout/bni.jpg') }}')" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">BNI</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li><a href="#" onclick="selectPayment('COD', '{{ asset('assets/checkout/cod.jpg') }}')" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">COD</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Total Berat dan Pilih Kurir -->
                    <div class="border-t pt-4 text-gray-600">
                        <p><strong>Total Berat:</strong> 200 Gram</p>
                    </div>
                    <div class="border-t mt-4 pt-4 flex items-center relative">
                        <span class="text-blue-600 mr-2">Pilih Kurir</span>
                        <button onclick="toggleCourierDropdown()" class="flex items-center focus:outline-none">
                            <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </button>
                    
                        <!-- Dropdown menu untuk kurir -->
                        <div id="courierDropdown" class="hidden absolute top-full mt-2 w-48 bg-white border border-gray-300 rounded-lg shadow-lg">
                            <ul class="py-2">
                                <li><a href="#" onclick="selectCourier('JNE')" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">JNE</a></li>
                                <li><a href="#" onclick="selectCourier('JNT')" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">JNT</a></li>
                                <li><a href="#" onclick="selectCourier('JNT Express')" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">JNT Express</a></li>
                            </ul>
                        </div>
                    </div>
                    
                    <script>
                    function toggleCourierDropdown() {
                        const dropdown = document.getElementById("courierDropdown");
                        dropdown.classList.toggle("hidden");
                    }
                    
                    function selectCourier(courier) {
                        console.log("Kurir yang dipilih:", courier);
                        // Di sini Anda dapat menambahkan logika untuk memperbarui tampilan atau pengaturan kurir
                    }
                    </script>
                    
                </div>
            </div>
        
            <!-- Moved Right Section: Summary and Order Button to Bottom -->
            <div class="bg-white p-6 rounded-lg shadow mt-4">
                <h2 class="text-lg font-bold mb-4">Ringkasan Belanja</h2>
                <div class="flex justify-between text-gray-700 mb-2">
                    <p>Total Harga (1 produk)</p>
                    <p>RP.95.000,00</p>
                </div>
                <div class="flex justify-between text-gray-700 mb-2">
                    <p>Total Ongkos Kirim</p>
                    <p>-</p>
                </div>
                <div class="border-t my-4"></div>
                <div class="flex justify-between text-gray-700 mb-2">
                    <p>Potongan</p>
                    <p>-</p>
                </div>
                <div class="flex justify-between font-bold text-xl text-gray-800 mb-4">
                    <p>Total Harga</p>
                    <p>RP.95.000,00</p>
                </div>
<!-- Tombol Buat Pesanan -->
<button id="orderButton" class="bg-blue-600 text-white text-center w-full py-2 rounded font-bold">Buat Pesanan</button>

<!-- Pop-up dengan latar belakang transparan -->
<div id="successPopup" class="bg-white bg-opacity-50 text-white p-4 rounded fixed inset-0 flex items-center justify-center hidden">
    <div class="bg-green-600 text-white p-6 rounded shadow-lg text-center">
        <p>Pesanan Anda Berhasil!</p>
        <button id="closePopup" class="bg-red-600 text-white py-2 px-4 rounded mt-4">Tutup</button>
    </div>
</div>


</div>
        </div>
        



                <script>
                // JS untuk form alamat baru
                 function showAddressForm() {
                    document.getElementById("addressForm").classList.remove("hidden");
                }

                function hideAddressForm() {
                    document.getElementById("addressForm").classList.add("hidden");
                }


                // JS untuk dropdown kurir

                function toggleCourierDropdown() {
                    const dropdown = document.getElementById("courierDropdown");
                    dropdown.classList.toggle("hidden");
                }

                function selectCourier(courier) {
                    console.log("Kurir yang dipilih:", courier);
                    // Di sini Anda dapat menambahkan logika untuk memperbarui tampilan atau pengaturan kurir
                }

                    // Function untuk toggle dropdown utama
                    function toggleDropdown() {
                        const dropdownMenu = document.getElementById("dropdownMenu");
                        const bankDropdown = document.getElementById("bankDropdown");
                
                        // Toggle visibilitas dropdown utama
                        dropdownMenu.classList.toggle("hidden");
                
                        // Tutup submenu bank jika dropdown utama terbuka
                        bankDropdown.classList.add("hidden");
                    }
                
                    // Function untuk toggle dropdown bank
                    function toggleBankDropdown() {
                        const bankDropdown = document.getElementById("bankDropdown");
                
                        // Toggle visibilitas submenu bank
                        bankDropdown.classList.toggle("hidden");
                    }
                
                    // Function untuk mengubah metode pembayaran
                    function selectPayment(method, logoSrc) {
                        
                        // Update teks dan logo metode pembayaran
                        document.getElementById("paymentMethod").textContent = method;
                        document.getElementById("paymentLogo").src = logoSrc;
                
                        // Tutup semua dropdown setelah memilih metode pembayaran
                        document.getElementById("dropdownMenu").classList.add("hidden");
                        document.getElementById("bankDropdown").classList.add("hidden");
                    }

                     // Tangani klik tombol "Buat Pesanan"
                document.getElementById('orderButton').addEventListener('click', function() {
                    // Tampilkan pop-up setelah klik tombol
                    document.getElementById('successPopup').classList.remove('hidden');
                });

                // Menangani penutupan pop-up dan pengalihan halaman
                document.getElementById('closePopup').addEventListener('click', function() {
                    // Sembunyikan pop-up
                    document.getElementById('successPopup').classList.add('hidden');
                    
                    // Arahkan ke halaman utama setelah pop-up ditutup
                    window.location.href = '/';
                });
                            </script>                


</body>
</html>

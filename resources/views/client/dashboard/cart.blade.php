<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kiye-Skin Shopping Cart</title>
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
        
    <!-- Cart Items -->
        <div class="container mx-auto p-6">
            <h2 class="text-2xl font-bold mb-4">Keranjang Belanja</h2>
            
            <div class="bg-white rounded-lg shadow p-6 mb-4">
                <div class="flex items-center mb-4">
                    <input type="checkbox" class="mr-4 ml-2">
                    
                    <img src="{{ asset('assets/img/produk.jpg') }}" alt="Product Image" class="w-20 h-20 object-cover mr-4">
                    
                    <div class="flex-1">
                        <p id="product-name" class="font-bold">Sunscreen Eminem</p>
                        <p id="product-description" class="text-gray-600">50 SPF dan cocok digunakan untuk tipe kulit apapun</p>
                        <div class="flex items-center mt-2">
                            <span class="text-red-500 font-bold mr-2" id="product-price">Rp133.500</span>
                            <span class="line-through text-gray-500">Rp143.500</span>
                            <span id="discount-label" class="bg-red-200 text-red-600 text-xs font-bold px-2 ml-2 rounded">Diskon 6%</span>
                        </div>
                    </div>
                    
                    <div class="flex items-center space-x-2">
                        <button class="px-3 py-1 text-gray-700 bg-gray-200 rounded-l hover:bg-gray-300" onclick="decrement()"> - </button>
                        <input type="text" id="kuantitas" value="1" class="w-12 text-center border border-gray-300 focus:outline-none" readonly>
                        <button class="px-3 py-1 text-gray-700 bg-gray-200 rounded-r hover:bg-gray-300" onclick="increment()"> + </button>
                    </div>
                    
                    <div class="text-right">
                        <p class="text-xl font-bold" id="total-price">Rp133.500</p>
                        <button onclick="removeItem()" class="text-red-500 mt-2">Hapus</button>
                    </div>
                </div>
    
                <div class="border-t pt-4 text-sm">
                    <p id="voucher-info" class="mb-2">Tersedia Voucher Diskon s/d Rp12RB <a href="#" class="text-blue-500">Voucher Lainnya</a></p>
                    <p id="free-shipping-info">Gratis Ongkir s/d Rp15.000 dengan min. belanja Rp0; Gratis Ongkir s/d Rp250.000 dengan min. belanja Rp3.000.000 <a href="#" class="text-blue-500">Pelajari lebih lanjut</a></p>
                </div>
            </div>


             <!-- Cart Items -->

            <div class="bg-white rounded-lg shadow p-6 mb-4">
                <div class="flex items-center mb-4">
                    <input type="checkbox" class="mr-4 ml-2">
                    
                    <img src="{{ asset('assets/img/produk.jpg') }}" alt="Product Image" class="w-20 h-20 object-cover mr-4">
                    
                    <div class="flex-1">
                        <p id="product-name" class="font-bold">Sunscreen Eminem</p>
                        <p id="product-description" class="text-gray-600">50 SPF dan cocok digunakan untuk tipe kulit apapun</p>
                        <div class="flex items-center mt-2">
                            <span class="text-red-500 font-bold mr-2" id="product-price">Rp133.500</span>
                            <span class="line-through text-gray-500">Rp143.500</span>
                            <span id="discount-label" class="bg-red-200 text-red-600 text-xs font-bold px-2 ml-2 rounded">Diskon 6%</span>
                        </div>
                    </div>
                    
                    <div class="flex items-center space-x-2">
                        <button class="px-3 py-1 text-gray-700 bg-gray-200 rounded-l hover:bg-gray-300" onclick="decrement()"> - </button>
                        <input type="text" id="kuantitas" value="1" class="w-12 text-center border border-gray-300 focus:outline-none" readonly>
                        <button class="px-3 py-1 text-gray-700 bg-gray-200 rounded-r hover:bg-gray-300" onclick="increment()"> + </button>
                    </div>
                    
                    <div class="text-right">
                        <p class="text-xl font-bold" id="total-price">Rp133.500</p>
                        <button onclick="removeItem()" class="text-red-500 mt-2">Hapus</button>
                    </div>
                </div>
    
                <div class="border-t pt-4 text-sm">
                    <p id="voucher-info" class="mb-2">Tersedia Voucher Diskon s/d Rp12RB <a href="#" class="text-blue-500">Voucher Lainnya</a></p>
                    <p id="free-shipping-info">Gratis Ongkir s/d Rp15.000 dengan min. belanja Rp0; Gratis Ongkir s/d Rp250.000 dengan min. belanja Rp3.000.000 <a href="#" class="text-blue-500">Pelajari lebih lanjut</a></p>
                </div>
            </div>

        <!-- Checkout Section -->
        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center justify-between mb-4">
                <div class="flex items-center space-x-2">
                    <input type="checkbox" id="select-all-checkbox" onclick="toggleSelectAll()">
                    <p id="select-all-text" class="text-sm-4">Pilih Semua</p>
                </div>
            </div>            
            <div class="flex justify-between items-center text-xl font-bold">
                <p id="total-text">Total (1 produk): Rp133.500</p>
                <a href="{{ route('checkout') }}" id="checkout-button" class="bg-blue-500 text-black px-6 py-2 rounded">Checkout</a>
            </div>
        </div>

        

    <script>
// Increment and decrement functions
function increment() {
    const kuantitasInput = document.getElementById("kuantitas");
    let kuantitas = parseInt(kuantitasInput.value, 10) || 0;
    kuantitasInput.value = kuantitas + 1;
    updateTotalPrice(kuantitas + 1);
}

function decrement() {
    const kuantitasInput = document.getElementById("kuantitas");
    let kuantitas = parseInt(kuantitasInput.value, 10) || 1;
    if (kuantitas > 1) {
        kuantitasInput.value = kuantitas - 1;
        updateTotalPrice(kuantitas - 1);
    }
}

// Optional: Toggle 'Pilih Semua' checkbox functionality
function toggleSelectAll() {
    const selectAllCheckbox = document.getElementById("select-all-checkbox");
    const isChecked = selectAllCheckbox.checked;
    // You can add functionality to select/deselect all items here
}

    // Java Script tambah kuranng
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

        // Java Script update total price and total discount
        function updateTotal() {
            const checkboxes = document.querySelectorAll('.item-checkbox');
            let totalPrice = 0;
            let totalDiscount = 0;
            let totalItems = 0;

            // Loop through all checkboxes
            checkboxes.forEach(checkbox => {
                if (checkbox.checked) {
                    totalItems++;
                    totalPrice += parseInt(checkbox.getAttribute('data-price'));
                    totalDiscount += parseInt(checkbox.getAttribute('data-discount'));
                }
            });

            // Update the total price and discount display
            document.getElementById('total-items').innerText = `Total (${totalItems} produk): Rp${totalPrice}`;
            document.getElementById('total-savings').innerText = `Hemat Rp${totalDiscount}`;
        }

        // Add event listeners to each checkbox
        document.querySelectorAll('.item-checkbox').forEach(checkbox => {
            checkbox.addEventListener('change', updateTotal);
        });
    </script>

</body>
</html>

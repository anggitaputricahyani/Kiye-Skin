<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Store</title>
    @vite(['resources/css/app.css', 'resources/js/app.js']) 
</head>
<body>
    <nav class="p-4 bg-white fixed top-0 left-0 w-full shadow-md z-20">
        <div class="container mx-auto flex justify-between items-center">
            <!-- Logo dan Nama Website -->
            <div class="flex items-center space-x-2">
                <img src="https://via.placeholder.com/40" alt="Logo" class="w-10 h-10 rounded-full">
                <span class="text-black text-2xl font-bold">KIYESKIN</span>
            </div>
            <!-- Tautan Navigasi -->
            <div class="hidden md:flex space-x-6 text-xl">
                <a href="{{ url('/') }}" class="text-[#2e94a4] hover:text-[#46e6ff]">Home</a>
                <a href="{{ url('/#about-us') }}" class="text-[#2e94a4] hover:text-[#46e6ff]">About Us</a>
                <a href="#" class="text-[#2e94a4] hover:text-[#46e6ff]">Store</a>
                <a href="#" class="text-[#2e94a4] font-bold hover:text-blue-400">Cek Kulit</a>
                <a href="#" class="px-10 py-2 bg-[#2e94a4] text-white rounded-full hover:bg-[#46e6ff] -mt-2">Login</a>
            </div>
            <!-- Tombol Menu Mobile -->
            <button class="md:hidden text-black focus:outline-none" id="menu-btn">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                </svg>
            </button>
        </div>
        <!-- Menu Mobile -->
        <div class="md:hidden bg-gray-800 p-4 hidden" id="menu">
            <a href="#" class="block text-white py-2">Home</a>
            <a href="#" class="block text-white py-2">About Us</a>
            <a href="#" class="block text-white py-2">Store</a>
            <a href="#" class="block text-white py-2">Cek Kulit</a>
            <a href="#" class="block text-white py-2 bg-blue-500 rounded mt-2 text-center">Login</a>
        </div>
    </nav>

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
        </div>
        <!-- Produk List -->
        <div class="flex flex-wrap mx-10" id="produk-list">
            <!-- Card Produk -->
            <div class="relative flex flex-col my-6 bg-white shadow-sm border border-slate-200 rounded-lg w-full md:w-1/3 p-4">
                <div class="relative h-96 overflow-hidden rounded-xl bg-clip-border">
                    <img src="{{ asset('assets/img/produk.jpg') }}" alt="card-image" class="h-full w-full object-cover rounded-md" />
                </div>
                <div class="p-4">
                    <div class="mb-2 flex items-center justify-between">
                        <p class="text-slate-800 text-xl font-semibold">Sunscreen Kiyeskin</p>
                        <p class="text-cyan-600 text-xl font-semibold">Rp.95.000</p>
                    </div>
                    <p class="text-slate-600 leading-normal font-light">
                        Debitis placeat ratione ad unde inventore laboriosam itaque, dolor dignissimos numquam eius dicta asperiores quia.
                    </p>
                    <button class="rounded-md mt-6 bg-cyan-600 py-2 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-cyan-700">Tambah ke keranjang</button>
                </div>
            </div>

            <div class="relative flex flex-col my-6 bg-white shadow-sm border border-slate-200 rounded-lg w-full md:w-1/3 p-4">
                <div class="relative h-96 overflow-hidden rounded-xl bg-clip-border">
                    <img src="{{ asset('assets/img/produk.jpg') }}" alt="card-image" class="h-full w-full object-cover rounded-md" />
                </div>
                <div class="p-4">
                    <div class="mb-2 flex items-center justify-between">
                        <p class="text-slate-800 text-xl font-semibold">Sunscreen Kiyeskin</p>
                        <p class="text-cyan-600 text-xl font-semibold">Rp.95.000</p>
                    </div>
                    <p class="text-slate-600 leading-normal font-light">
                        Debitis placeat ratione ad unde inventore laboriosam itaque, dolor dignissimos numquam eius dicta asperiores quia.
                    </p>
                    <button class="rounded-md mt-6 bg-cyan-600 py-2 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-cyan-700">Tambah ke keranjang</button>
                </div>
            </div>

            <div class="relative flex flex-col my-6 bg-white shadow-sm border border-slate-200 rounded-lg w-full md:w-1/3 p-4">
                <div class="relative h-96 overflow-hidden rounded-xl bg-clip-border">
                    <img src="{{ asset('assets/img/produk.jpg') }}" alt="card-image" class="h-full w-full object-cover rounded-md" />
                </div>
                <div class="p-4">
                    <div class="mb-2 flex items-center justify-between">
                        <p class="text-slate-800 text-xl font-semibold">Sunscreen Kiyeskin</p>
                        <p class="text-cyan-600 text-xl font-semibold">Rp.95.000</p>
                    </div>
                    <p class="text-slate-600 leading-normal font-light">
                        Debitis placeat ratione ad unde inventore laboriosam itaque, dolor dignissimos numquam eius dicta asperiores quia.
                    </p>
                    <button class="rounded-md mt-6 bg-cyan-600 py-2 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-cyan-700">Tambah ke keranjang</button>
                </div>
            </div>

            <div class="relative flex flex-col my-6 bg-white shadow-sm border border-slate-200 rounded-lg w-full md:w-1/3 p-4">
                <div class="relative h-96 overflow-hidden rounded-xl bg-clip-border">
                    <img src="{{ asset('assets/img/produk.jpg') }}" alt="card-image" class="h-full w-full object-cover rounded-md" />
                </div>
                <div class="p-4">
                    <div class="mb-2 flex items-center justify-between">
                        <p class="text-slate-800 text-xl font-semibold">Sunscreen Kiyeskin</p>
                        <p class="text-cyan-600 text-xl font-semibold">Rp.95.000</p>
                    </div>
                    <p class="text-slate-600 leading-normal font-light">
                        Debitis placeat ratione ad unde inventore laboriosam itaque, dolor dignissimos numquam eius dicta asperiores quia.
                    </p>
                    <button class="rounded-md mt-6 bg-cyan-600 py-2 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-cyan-700">Tambah ke keranjang</button>
                </div>
            </div>

            <div class="relative flex flex-col my-6 bg-white shadow-sm border border-slate-200 rounded-lg w-full md:w-1/3 p-4">
                <div class="relative h-96 overflow-hidden rounded-xl bg-clip-border">
                    <img src="{{ asset('assets/img/produk.jpg') }}" alt="card-image" class="h-full w-full object-cover rounded-md" />
                </div>
                <div class="p-4">
                    <div class="mb-2 flex items-center justify-between">
                        <p class="text-slate-800 text-xl font-semibold">Sunscreen Kiyeskin</p>
                        <p class="text-cyan-600 text-xl font-semibold">Rp.95.000</p>
                    </div>
                    <p class="text-slate-600 leading-normal font-light">
                        Debitis placeat ratione ad unde inventore laboriosam itaque, dolor dignissimos numquam eius dicta asperiores quia.
                    </p>
                    <button class="rounded-md mt-6 bg-cyan-600 py-2 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-cyan-700">Tambah ke keranjang</button>
                </div>
            </div>

            
        </div>
    </section>

     <!-- Footer -->
 <footer class="bg-[#2e94a4] text-white py-4 pt-26 pb-2">
  <div class="container mx-auto text-center">
    <p class=" pt-14 w-1/2 ml-80 ">Lorem ipsum dolor sit amet consectetur adipisicing elit.eveniet temporibus laudantium consequatur minima nulla? Veritatis facere tenetur ad copyright@</p>

  </div> 
  <div class="flex space-x-4 mt-4  justify-center">
            <a href="#" class="text-blue-400">
                <svg class="" xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 256 256"><g fill="none"><rect width="256" height="256" fill="url(#skillIconsInstagram0)" rx="60"/><rect width="256" height="256" fill="url(#skillIconsInstagram1)" rx="60"/><path fill="#fff" d="M128.009 28c-27.158 0-30.567.119-41.233.604c-10.646.488-17.913 2.173-24.271 4.646c-6.578 2.554-12.157 5.971-17.715 11.531c-5.563 5.559-8.98 11.138-11.542 17.713c-2.48 6.36-4.167 13.63-4.646 24.271c-.477 10.667-.602 14.077-.602 41.236s.12 30.557.604 41.223c.49 10.646 2.175 17.913 4.646 24.271c2.556 6.578 5.973 12.157 11.533 17.715c5.557 5.563 11.136 8.988 17.709 11.542c6.363 2.473 13.631 4.158 24.275 4.646c10.667.485 14.073.604 41.23.604c27.161 0 30.559-.119 41.225-.604c10.646-.488 17.921-2.173 24.284-4.646c6.575-2.554 12.146-5.979 17.702-11.542c5.563-5.558 8.979-11.137 11.542-17.712c2.458-6.361 4.146-13.63 4.646-24.272c.479-10.666.604-14.066.604-41.225s-.125-30.567-.604-41.234c-.5-10.646-2.188-17.912-4.646-24.27c-2.563-6.578-5.979-12.157-11.542-17.716c-5.562-5.562-11.125-8.979-17.708-11.53c-6.375-2.474-13.646-4.16-24.292-4.647c-10.667-.485-14.063-.604-41.23-.604zm-8.971 18.021c2.663-.004 5.634 0 8.971 0c26.701 0 29.865.096 40.409.575c9.75.446 15.042 2.075 18.567 3.444c4.667 1.812 7.994 3.979 11.492 7.48c3.5 3.5 5.666 6.833 7.483 11.5c1.369 3.52 3 8.812 3.444 18.562c.479 10.542.583 13.708.583 40.396s-.104 29.855-.583 40.396c-.446 9.75-2.075 15.042-3.444 18.563c-1.812 4.667-3.983 7.99-7.483 11.488c-3.5 3.5-6.823 5.666-11.492 7.479c-3.521 1.375-8.817 3-18.567 3.446c-10.542.479-13.708.583-40.409.583c-26.702 0-29.867-.104-40.408-.583c-9.75-.45-15.042-2.079-18.57-3.448c-4.666-1.813-8-3.979-11.5-7.479s-5.666-6.825-7.483-11.494c-1.369-3.521-3-8.813-3.444-18.563c-.479-10.542-.575-13.708-.575-40.413s.096-29.854.575-40.396c.446-9.75 2.075-15.042 3.444-18.567c1.813-4.667 3.983-8 7.484-11.5s6.833-5.667 11.5-7.483c3.525-1.375 8.819-3 18.569-3.448c9.225-.417 12.8-.542 31.437-.563zm62.351 16.604c-6.625 0-12 5.37-12 11.996c0 6.625 5.375 12 12 12s12-5.375 12-12s-5.375-12-12-12zm-53.38 14.021c-28.36 0-51.354 22.994-51.354 51.355s22.994 51.344 51.354 51.344c28.361 0 51.347-22.983 51.347-51.344c0-28.36-22.988-51.355-51.349-51.355zm0 18.021c18.409 0 33.334 14.923 33.334 33.334c0 18.409-14.925 33.334-33.334 33.334s-33.333-14.925-33.333-33.334c0-18.411 14.923-33.334 33.333-33.334"/><defs><radialGradient id="skillIconsInstagram0" cx="0" cy="0" r="1" gradientTransform="matrix(0 -253.715 235.975 0 68 275.717)" gradientUnits="userSpaceOnUse"><stop stop-color="#fd5"/><stop offset=".1" stop-color="#fd5"/><stop offset=".5" stop-color="#ff543e"/><stop offset="1" stop-color="#c837ab"/></radialGradient><radialGradient id="skillIconsInstagram1" cx="0" cy="0" r="1" gradientTransform="matrix(22.25952 111.2061 -458.39518 91.75449 -42.881 18.441)" gradientUnits="userSpaceOnUse"><stop stop-color="#3771c8"/><stop offset=".128" stop-color="#3771c8"/><stop offset="1" stop-color="#60f" stop-opacity="0"/></radialGradient></defs></g></svg>
            </a>
            <a href="#" class="text-pink-500">
            <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 256 256"><path fill="#1877f2" d="M256 128C256 57.308 198.692 0 128 0S0 57.308 0 128c0 63.888 46.808 116.843 108 126.445V165H75.5v-37H108V99.8c0-32.08 19.11-49.8 48.348-49.8C170.352 50 185 52.5 185 52.5V84h-16.14C152.959 84 148 93.867 148 103.99V128h35.5l-5.675 37H148v89.445c61.192-9.602 108-62.556 108-126.445"/><path fill="#fff" d="m177.825 165l5.675-37H148v-24.01C148 93.866 152.959 84 168.86 84H185V52.5S170.352 50 156.347 50C127.11 50 108 67.72 108 99.8V128H75.5v37H108v89.445A129 129 0 0 0 128 256a129 129 0 0 0 20-1.555V165z"/></svg>
            </a>
            <a href="#" class="text-blue-600">
            <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 256 209"><path fill="#55acee" d="M256 25.45a105 105 0 0 1-30.166 8.27c10.845-6.5 19.172-16.793 23.093-29.057a105.2 105.2 0 0 1-33.351 12.745C205.995 7.201 192.346.822 177.239.822c-29.006 0-52.523 23.516-52.523 52.52c0 4.117.465 8.125 1.36 11.97c-43.65-2.191-82.35-23.1-108.255-54.876c-4.52 7.757-7.11 16.78-7.11 26.404c0 18.222 9.273 34.297 23.365 43.716a52.3 52.3 0 0 1-23.79-6.57q-.004.33-.003.661c0 25.447 18.104 46.675 42.13 51.5a52.6 52.6 0 0 1-23.718.9c6.683 20.866 26.08 36.05 49.062 36.475c-17.975 14.086-40.622 22.483-65.228 22.483c-4.24 0-8.42-.249-12.529-.734c23.243 14.902 50.85 23.597 80.51 23.597c96.607 0 149.434-80.031 149.434-149.435q0-3.417-.152-6.795A106.8 106.8 0 0 0 256 25.45"/></svg>
            </a>
        </div>
</footer>
</body>
</html>

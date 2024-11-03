<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kiyeskin</title>
    <script> @vite(['resources/css/app.css', 'resources/js/app.js']) </script>
</head>
<body class=" ">
  <section class="bg-gradient-to-r from-[#92C7CF] to- bg-white">
    <nav class="p-10">
    <div class="container mx-auto flex justify-between items-center">
      <!-- Logo and Website Name -->
      <div class="flex items-center space-x-2">
        
        <!-- Logo Icon -->
        <img src="https://via.placeholder.com/40" alt="Logo" class="w-10 h-10 rounded-full">
        <!-- Website Name -->
        <span class="text-black text-2xl font-bold">KIYESKIN</span>
      </div>

      <!-- Navigation Links -->
      <div class="hidden md:flex space-x-6 text-xl">
        <a href="#" class="text-[#2e94a4] hover:text-[#46e6ff]">Home</a>
        <a href="#about-us" class="text-[#2e94a4] hover:text-[#46e6ff]">About Us</a>
        <a href="{{ url('/store') }}" class="text-[#2e94a4] hover:text-[#46e6ff]">Store</a>
        <a href="#" class="text-[#2e94a4] hover:text-[#46e6ff] font-bold">Cek Kulit</a>
        <a href="#" class="px-10 py-2 bg-[#2e94a4] text-white rounded-full hover:bg-[#46e6ff]  ">Login</a>
      </div>

      <!-- Mobile Menu Button -->
      <button class="md:hidden text-white focus:outline-none" id="menu-btn">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
        </svg>
      </button>
    </div>

    <!-- Mobile Menu -->
    <div class="md:hidden bg-gray-800 p-4 hidden" id="menu">
      <a href="#" class="block text-white py-2">Home</a>
      <a href="#" class="block text-white py-2">About Us</a>
      <a href="#" class="block text-white py-2">Store</a>
      <a href="#" class="block text-white py-2">Cek Kulit</a>
      <a href="#" class="block text-white py-2 bg-blue-500 rounded mt-2 text-center">Login</a>
    </div>
  </nav>
  

<section
  class="relative bg-[url()] bg-cover bg-center bg-no-repeat mb-0 pt-0 h-screen"
>
  <div
    class="absolute inset-0 bg-white/75 sm:bg-transparent sm:from-white/95 sm:to-white/25 ltr:sm:bg-gradient-to-r rtl:sm:bg-gradient-to-l"
  ></div>

  <div class="relative mx-auto max-w-screen-xl px-4 py-32 sm:px-6 lg:flex lg:h-screen lg:items-center lg:px-8 pt-0 ">
    <div class="max-w-xl text-center ltr:sm:text-left rtl:sm:text-right">
      <h1 class="text-6xl font-extrabold md:text-7xl text-left">
        Selamat Datang Di
        <strong class="inline font-extrabold text-[#2e94a4] text-left"> KIYESKIN </strong>
      </h1>

      <p class="mt-4 max-w-lg sm:text-xl/relaxed text-left ">
        Test kesehatan kulit wajah anda dan temukan skincare yang cocok untuk kulit Anda
      </p>

      <div class="mt-10 flex flex-wrap gap-4 text-center pt-0 -ml-20">
        <a
          href="#"
          class="block w-full rounded bg-[#2e94a4] px-12 py-3 ml-20 text-sm  font-medium text-white shadow hover:bg-[#46e6ff] focus:outline-none focus:ring active:bg-[#46e6ff]] sm:w-auto "
        >
          Check Kulit Anda
        </a>

        <a
          href="#"
          class="block w-full rounded bg-white px-12 py-3 text-sm font-medium text-[#2e94a4] shadow hover:text-[#46e6ff] focus:outline-none focus:ring active:text-[#46e6ff] sm:w-auto"
        >
          Shop Now
        </a>
        
      </div>
    </div>
  </div>

  <!-- About Us Section -->
  <section id="about-us" class="pt-36 pb-32 bg-[#2e94a4] text-white text-center">
    <h2 class="text-4xl font-bold mb-4">About Us</h2>
    <p class="max-w-2xl mx-auto text-lg">
      Kami adalah perusahaan yang berkomitmen untuk memberikan produk skincare terbaik untuk kesehatan kulit Anda.
    </p>
    <div class=" container flex justify-between ">
      <div class="py-20 w-1/2 ">
        <img src="https://img.freepik.com/free-vector/beautiful-woman-facial-treatment_24877-54310.jpg?uid=R169594742&ga=GA1.1.705682750.1729510943&semt=ais_hybrid" class=" size-96 mx-32 " alt="">
      </div>

      <div class=" w-1/2 py-48 ">
        <p class=" font-light ">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eum ratione blanditiis, doloribus ad harum quaerat? Facere eaque possimus aperiam quaerat vero dolorem tenetur, neque totam voluptas excepturi fugiat voluptatibus quibusdam.Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto, numquam illum mollitia corporis totam eum magnam ex dicta dolorum ea praesentium, magni odit itaque beatae recusandae deserunt delectus assumenda. Porro. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facilis deleniti libero in cupiditate at architecto obcaecati, expedita aperiam cum, neque soluta itaque nisi dolorem ab ratione dolorum aliquam pariatur voluptas</p>
      </div>

      

    </div>
  </section>
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#2e94a4" fill-opacity="1" d="M0,128L34.3,117.3C68.6,107,137,85,206,85.3C274.3,85,343,107,411,149.3C480,192,549,256,617,272C685.7,288,754,256,823,224C891.4,192,960,160,1029,133.3C1097.1,107,1166,85,1234,90.7C1302.9,96,1371,128,1406,144L1440,160L1440,0L1405.7,0C1371.4,0,1303,0,1234,0C1165.7,0,1097,0,1029,0C960,0,891,0,823,0C754.3,0,686,0,617,0C548.6,0,480,0,411,0C342.9,0,274,0,206,0C137.1,0,69,0,34,0L0,0Z"></path></svg>

  <!-- Edukasi section -->
   <section id="Edukasi " class="pt-36 pb-52 text-center bg-white  "> 
    <h2 class=" text-4xl font-bold mb-4 ">Edukasi Kesehatan Kulit</h2>
<div class="flex justify-between" >
    <div class=" my-20 ml-10  ">
      <h1 class=" text-4xl font-bold text-left ">Ketahui Jenis Kulit Anda</h1>
      <p class=" w-6/8 py-10 text-left font-light ">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta perferendis sapiente aliquam deleniti delectus iste eius dolorum nihil, iure asperiores facere maiores, eveniet dolore beatae tenetur quod hic saepe nemo?Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium vitae esse placeat ex repellendus cupiditate tempora numquam accusamus nihil nisi. Reiciendis sit accusamus modi, praesentium id autem? Veritatis, esse laudantium!</p>
    </div>
    <div class=" mr-80 mt-20 ">
    <img src="{{ ('assets/img/2.jpg') }}" alt="Deskripsi Gambar" class=" size-96 mx-52 ">
    </div>
</div>


    <button class=" flex flex-wrap gap-4 text-center pt-0 ml-10 -mt-36">
      <a href="#" class=" bg-[#2e94a4] px-12 py-3 rounded-full text-white  ">Baca Selengkapnya</a>
    </button>
    
   </section>
   <div class=" flex justify-center space-x-2 -mt-16 pt-8 pb-24">
    <!-- Active Dot -->
    <button class="w-6 h-6 rounded-full bg-[#2e94a4]"></button>
    <!-- Inactive Dots -->
    <button class="w-6 h-6 rounded-full bg-gray-300"></button>
    <button class="w-6 h-6 rounded-full bg-gray-300"></button>
</div>

<!-- Mulai Test -->
 <section id="Mulai_test" class="pt-36 pb-32 bg-[#2e94a4]">
 <div class="container mx-auto p-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="relative overflow-hidden rounded-lg shadow-lg">
                <img src="{{ ('assets/img/gambar3.jpeg') }}" alt="Image" class="w-full h-full object-cover">
                
            </div>
            <div class="bg-white rounded-lg shadow-lg p-8 pt-20 ">
                <h2 class="text-2xl font-bold mb-4 text-center">Test Sekarang</h2>
                <p class="text-gray-600 mb-4 text-center "> loLorem Ipsum Dolor Sit Amet Consectetur. Risus Pellentesque Cursus Maecenas Quis Fames Cursus. Tellus Pellentesque Nulla Placerat Eget Lacus Aliquet In Consequat Dictumst. Sit Ac Pellentesque Nam Tellus Faucibus In Sed. Aliquam Ultrices Elementum Auctor Aliquet Risus.</p>
                <div class=" ml-52 ">
                <button class="bg-[#2e94a4] hover:bg-[#0D7C66] text-white font-bold py-2 px-4 rounded">Mulai Test</button>
                </div>
            </div>
        </div>
    </div>
 </section>

 <!-- contact us -->
  <section id="contact-us" class=" pt-32 pb-32 bg-white  ">
  <div class="flex flex-col md:flex-row items-center p-8 bg-white text-black  ">
        <div class="md:w-1/2 text-center md:text-left">
            <p class="text-[#2e94a4] font-semibold uppercase mb-2">Anda punya pertanyaan?</p>
            <h2 class="text-4xl font-bold mb-4">Konsultasikan Segera</h2>
            <p class="mb-6 text-gray-600">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates tempora minus repellat omnis saepe debitis suscipit odio temporibus dolorum quia deserunt, excepturi qui asperiores cum dolor neque blanditiis, iste repudiandae!:
            </p>
            <a href="https://wa.me/" class="inline-flex items-center px-6 py-3 border border-[#2e94a4] text-[#2e94a4] rounded-lg hover:bg-[#2e94a4] hover:text-white transition duration-300">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2" width="1em" height="1em" viewBox="0 0 256 258"><defs><linearGradient id="logosWhatsappIcon0" x1="50%" x2="50%" y1="100%" y2="0%"><stop offset="0%" stop-color="#1faf38"/><stop offset="100%" stop-color="#60d669"/></linearGradient><linearGradient id="logosWhatsappIcon1" x1="50%" x2="50%" y1="100%" y2="0%"><stop offset="0%" stop-color="#f9f9f9"/><stop offset="100%" stop-color="#fff"/></linearGradient></defs><path fill="url(#logosWhatsappIcon0)" d="M5.463 127.456c-.006 21.677 5.658 42.843 16.428 61.499L4.433 252.697l65.232-17.104a123 123 0 0 0 58.8 14.97h.054c67.815 0 123.018-55.183 123.047-123.01c.013-32.867-12.775-63.773-36.009-87.025c-23.23-23.25-54.125-36.061-87.043-36.076c-67.823 0-123.022 55.18-123.05 123.004"/><path fill="url(#logosWhatsappIcon1)" d="M1.07 127.416c-.007 22.457 5.86 44.38 17.014 63.704L0 257.147l67.571-17.717c18.618 10.151 39.58 15.503 60.91 15.511h.055c70.248 0 127.434-57.168 127.464-127.423c.012-34.048-13.236-66.065-37.3-90.15C194.633 13.286 162.633.014 128.536 0C58.276 0 1.099 57.16 1.071 127.416m40.24 60.376l-2.523-4.005c-10.606-16.864-16.204-36.352-16.196-56.363C22.614 69.029 70.138 21.52 128.576 21.52c28.3.012 54.896 11.044 74.9 31.06c20.003 20.018 31.01 46.628 31.003 74.93c-.026 58.395-47.551 105.91-105.943 105.91h-.042c-19.013-.01-37.66-5.116-53.922-14.765l-3.87-2.295l-40.098 10.513z"/><path fill="#fff" d="M96.678 74.148c-2.386-5.303-4.897-5.41-7.166-5.503c-1.858-.08-3.982-.074-6.104-.074c-2.124 0-5.575.799-8.492 3.984c-2.92 3.188-11.148 10.892-11.148 26.561s11.413 30.813 13.004 32.94c1.593 2.123 22.033 35.307 54.405 48.073c26.904 10.609 32.379 8.499 38.218 7.967c5.84-.53 18.844-7.702 21.497-15.139c2.655-7.436 2.655-13.81 1.859-15.142c-.796-1.327-2.92-2.124-6.105-3.716s-18.844-9.298-21.763-10.361c-2.92-1.062-5.043-1.592-7.167 1.597c-2.124 3.184-8.223 10.356-10.082 12.48c-1.857 2.129-3.716 2.394-6.9.801c-3.187-1.598-13.444-4.957-25.613-15.806c-9.468-8.442-15.86-18.867-17.718-22.056c-1.858-3.184-.199-4.91 1.398-6.497c1.431-1.427 3.186-3.719 4.78-5.578c1.588-1.86 2.118-3.187 3.18-5.311c1.063-2.126.531-3.986-.264-5.579c-.798-1.593-6.987-17.343-9.819-23.64"/></svg>
                Konsultasi Gratis Disini
            </a>
        </div>

        <div class="md:w-1/2 mt-8 md:mt-0 flex justify-center">
            <img src="{{ ('assets/img/pict.jpg') }}" alt="Gambar Konsultasi" class="max-w-7/12 h-auto">
        </div>
        
    </div>
    </section>

 <!-- Footer -->
 <footer class="bg-[#0D7C66] text-white py-4">
  <div class="container mx-auto text-center">
    <p class="text-sm">&copy; 2024 Nama Website. All rights reserved.</p>
    <p class="text-sm mt-1">Dibuat dengan <span class="text-red-500">❤</span> oleh Tim Kami</p>
  </div>
</footer>



</body>
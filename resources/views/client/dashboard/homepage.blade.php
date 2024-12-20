<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kiye-Skin</title>
    @vite(['resources/css/app.css', 'resources/js/app.js']) 
</head>
@extends('client.dashboard.navbar')   
<body class=" ">
  <section class="bg-gradient-to-r from-[#92C7CF] to- bg-white">
    <nav class="p-10">
<section id= "/home" class="relative bg-[url()] bg-cover bg-center bg-no-repeat mb-0 pt-0 h-screen">

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
          href="/hometest"
          class="block w-full rounded bg-[#2e94a4] px-12 py-3 ml-20 text-sm  font-medium text-white shadow hover:bg-[#46e6ff] focus:outline-none focus:ring active:bg-[#46e6ff]] sm:w-auto "
        >
          Check Kulit Anda
        </a>

        <a
          href="/store"
          class="block w-full rounded bg-white px-12 py-3 text-sm font-medium text-[#2e94a4] shadow hover:text-[#46e6ff] focus:outline-none focus:ring active:text-[#46e6ff] sm:w-auto"
        >
          Shop Now
        </a>
        
      </div>
    </div>
  </div>

  <!-- About Us Section -->
  <section id="about-us" class="pt-36 pb-32 bg white text-black text-center">
    <h2 class="text-4xl font-bold mb-4">About Us</h2>
    <p class="max-w-2xl mx-auto text-lg">
      Kami adalah perusahaan yang berkomitmen untuk memberikan produk skincare terbaik untuk kesehatan kulit Anda.
    </p>
    <div class=" container flex justify-between ">
      <div class="py-4 w-1/3 ml-32">
        <img src="assets/img/gambar4.jpg" alt="Gambar Tentang Kami" class="mx-auto">
      </div>

      <div class=" w-1/2 py-40 ">
        <p class=" font-light  " >Selamat datang di Kiye-skin, destinasi terbaik Anda untuk kesehatan kulit wajah yang lebih baik dan cerah!

Kami hadir sebagai solusi lengkap untuk perawatan kulit wajah Anda. Di Kiye-skin, kami tidak hanya menawarkan produk skincare berkualitas, tetapi juga membantu Anda memahami kondisi kulit wajah secara mendalam melalui fitur cek kesehatan kulit yang inovatif.

Kami percaya bahwa setiap orang berhak memiliki kulit sehat dan bercahaya. Oleh karena itu, kami tidak hanya menjual produk, tetapi juga memberikan edukasi menyeluruh tentang perawatan kulit wajah. Melalui informasi yang akurat dan terpercaya, kami ingin membangun kebiasaan perawatan kulit yang tepat dan efektif bagi semua orang.</p>
      </div>

      

    </div>
  </section>
 

  <!-- Edukasi section -->
   <section id="Edukasi " class="pt-36 pb-52 text-center bg-white  "> 
    <h2 class=" text-4xl font-bold mb-4 ">Edukasi Kesehatan Kulit</h2>
<div class="flex justify-between" >
    <div class=" my-20 ml-10  ">
      <h1 class=" text-4xl font-bold text-left ">Ketahui Jenis Kulit Anda</h1>
      <p class=" w-6/8 py-10 text-left font-light ">Apa itu kulit berminyak?
Kulit berminyak merupakan kondisi ketika kelenjar sebasea pada kulit menghasilkan terlalu banyak sebum.

Sebum adalah minyak alami yang berfungsi melapisi kulit dan rambut. Produksi sebum berlebih membuat kulit terlihat mengilap dan berkilau.

Sebum sebenarnya membantu merawat kulit tetap lembap. Akan tetapi, minyak yang terlalu banyak justru dapat memicu masalah baru, terutama jerawat.

Ini disebabkan karena kotoran lebih mudah menempel pada kulit hingga akhirnya menyumbat pori.</p>
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
 <section id="Mulai_test" class="pt-36 pb-52 bg-white">
 <div class="container mx-auto p-8">
 <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
  <!-- Kontainer Gambar -->
  <div class="relative overflow-hidden rounded-lg shadow-lg h-[500px]">
    <img src="{{ asset('assets/img/gambar3.png') }}" alt="Image" 
         class="w-full h-full object-cover rounded-lg">
  </div>

  <!-- Kontainer Konten -->
  <div class="bg-white rounded-lg shadow-lg p-8 flex flex-col justify-center h-[500px]">
    <h2 class="text-2xl font-bold mb-4 text-center">Test Sekarang</h2>
    <p class="text-gray-600 mb-4 text-center">
      Cek kondisi kulit wajah Anda sekarang juga! Dengan teknologi kami, Anda bisa mengetahui permasalahan kulit dan mendapatkan rekomendasi perawatan yang sesuai. Jangan tunggu lebih lama, mulai langkah menuju kulit sehat dan bercahaya!
    </p>
    <div class="text-center">
      <a href="/hometest" class="bg-[#2e94a4] hover:bg-[#0D7C66] text-white font-bold py-2 px-6 rounded-3xl">
        Mulai test
      </a>
    </div>
  </div>
</div>

        </div>
    </div>
 </section>

 <!-- contact us -->
  <section id="contact-us" class=" pt-32 pb-32 bg- white  ">
  <div class="flex flex-col md:flex-row items-center p-8 text-black  ">
        <div class="md:w-1/2 text-center md:text-left">
            <h1 class="text-[#2e94a4] text-4xl uppercase mb-2 font-bold">Anda punya pertanyaan?</h1>
            <h2 class="text-3xl font-bold mb-4">Konsultasikan Segera</h2>
            <p class="mb-6 text-gray-600">
            Jangan ragu untuk berkonsultasi dengan kami tentang kondisi kulit wajah Anda. Tim profesional kami siap membantu memberikan solusi dan rekomendasi perawatan terbaik untuk kulit sehat dan bercahaya.
            </p>
            <a href="https://wa.me/+6288224154244" class="inline-flex items-center px-6 py-3 border border-[#2e94a4] text-[#2e94a4] rounded-lg hover:bg-[#2e94a4] hover:text-white transition duration-300">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2" width="1em" height="1em" viewBox="0 0 256 258"><defs><linearGradient id="logosWhatsappIcon0" x1="50%" x2="50%" y1="100%" y2="0%"><stop offset="0%" stop-color="#1faf38"/><stop offset="100%" stop-color="#60d669"/></linearGradient><linearGradient id="logosWhatsappIcon1" x1="50%" x2="50%" y1="100%" y2="0%"><stop offset="0%" stop-color="#f9f9f9"/><stop offset="100%" stop-color="#fff"/></linearGradient></defs><path fill="url(#logosWhatsappIcon0)" d="M5.463 127.456c-.006 21.677 5.658 42.843 16.428 61.499L4.433 252.697l65.232-17.104a123 123 0 0 0 58.8 14.97h.054c67.815 0 123.018-55.183 123.047-123.01c.013-32.867-12.775-63.773-36.009-87.025c-23.23-23.25-54.125-36.061-87.043-36.076c-67.823 0-123.022 55.18-123.05 123.004"/><path fill="url(#logosWhatsappIcon1)" d="M1.07 127.416c-.007 22.457 5.86 44.38 17.014 63.704L0 257.147l67.571-17.717c18.618 10.151 39.58 15.503 60.91 15.511h.055c70.248 0 127.434-57.168 127.464-127.423c.012-34.048-13.236-66.065-37.3-90.15C194.633 13.286 162.633.014 128.536 0C58.276 0 1.099 57.16 1.071 127.416m40.24 60.376l-2.523-4.005c-10.606-16.864-16.204-36.352-16.196-56.363C22.614 69.029 70.138 21.52 128.576 21.52c28.3.012 54.896 11.044 74.9 31.06c20.003 20.018 31.01 46.628 31.003 74.93c-.026 58.395-47.551 105.91-105.943 105.91h-.042c-19.013-.01-37.66-5.116-53.922-14.765l-3.87-2.295l-40.098 10.513z"/><path fill="#fff" d="M96.678 74.148c-2.386-5.303-4.897-5.41-7.166-5.503c-1.858-.08-3.982-.074-6.104-.074c-2.124 0-5.575.799-8.492 3.984c-2.92 3.188-11.148 10.892-11.148 26.561s11.413 30.813 13.004 32.94c1.593 2.123 22.033 35.307 54.405 48.073c26.904 10.609 32.379 8.499 38.218 7.967c5.84-.53 18.844-7.702 21.497-15.139c2.655-7.436 2.655-13.81 1.859-15.142c-.796-1.327-2.92-2.124-6.105-3.716s-18.844-9.298-21.763-10.361c-2.92-1.062-5.043-1.592-7.167 1.597c-2.124 3.184-8.223 10.356-10.082 12.48c-1.857 2.129-3.716 2.394-6.9.801c-3.187-1.598-13.444-4.957-25.613-15.806c-9.468-8.442-15.86-18.867-17.718-22.056c-1.858-3.184-.199-4.91 1.398-6.497c1.431-1.427 3.186-3.719 4.78-5.578c1.588-1.86 2.118-3.187 3.18-5.311c1.063-2.126.531-3.986-.264-5.579c-.798-1.593-6.987-17.343-9.819-23.64"/></svg>
                Konsultasi Gratis Disini
            </a>
        </div>

        <div class="md:w-1/4 mt-8 md:mt-0 flex justify-center ml-52">
          <img src="{{ ('assets/img/pict.jpg') }}" alt="Gambar Konsultasi" class="max-w-md h-auto">
      </div>
      
        
    </div>
    </section>

 <!-- Footer -->
 <footer class="bg-gray-800 text-white py-4 w-full">
  <div class="max-w-full mx-auto text-center px-4">
    <p class="text-sm">&copy; 2024 Nama Website. All rights reserved.</p>
    <p class="text-sm mt-1">Dibuat dengan <span class="text-red-500">❤</span> oleh Tim Kami</p>
  </div>
</footer>




</body>
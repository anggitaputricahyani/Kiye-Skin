<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kiyeskin</title>
    <script> @vite(['resources/css/app.css', 'resources/js/app.js']) </script>
</head>
<body >
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
        <a href="#" class="text-[#2e94a4] hover:text-[#46e6ff]">Store</a>
        <a href="#" class="text-white px-10 py-2  hover:bg-[#46e6ff]  bg-[#2e94a4] rounded-full">Cek Kulit</a>
        <a href="#" class="px-10 py-2 bg-[#2e94a4] text-white rounded-md hover:bg-[#46e6ff]  ">Login</a>
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

  <div
    class="relative mx-auto max-w-screen-xl px-4 py-32 sm:px-6 lg:flex lg:h-screen lg:items-center lg:px-8 pt-0 "
  >
    <div class="max-w-xl text-center ltr:sm:text-left rtl:sm:text-right">
      <h1 class="text-9xl font-extrabold md:text-7xl text-left">
        Selamat Datang Di
        <strong class="block font-extrabold text-[#2e94a4] text-left"> KIYESKIN </strong>
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
<section id="Edukasi" class="pt-36 pb-32 text-center"> 
  <h2 class="text-4xl font-bold mb-4">Edukasi Kesehatan Kulit</h2>
  <div class="flex flex-col md:flex-row items-center justify-center mx-auto my-10 space-x-0 md:space-x-8">
    
    <div class="my-20 md:ml-10 md:w-1/2 text-left">
      <h1 class="text-4xl font-bold mb-4">Ketahui Jenis Kulit Anda</h1>
      <p class="py-10 font-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta perferendis sapiente aliquam deleniti delectus iste eius dolorum nihil, iure asperiores facere maiores, eveniet dolore beatae tenetur quod hic saepe nemo? Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium vitae esse placeat ex repellendus cupiditate tempora numquam accusamus nihil nisi. Reiciendis sit accusamus modi, praesentium id autem? Veritatis, esse laudantium!</p>
    </div>

    <div class="md:w-1/2">
      <img src="" alt="Ilustrasi kulit" class="w-full h-auto rounded-md shadow-lg">
    </div>
    
  </div>
</section>


    <button class=" flex flex-wrap gap-4 text-center pt-0 ml-10 -mt-60">
      <a href="#" class=" bg-[#2e94a4] px-12 py-3 rounded-full text-white  ">Baca Selengkapnya</a>
    </button>

   </section>


</body>
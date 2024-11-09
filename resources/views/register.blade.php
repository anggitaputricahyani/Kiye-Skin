<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="flex flex-col min-h-screen" style="background: linear-gradient(to right, #92C7CF, white);">

    <div class="flex flex-col items-center justify-center flex-grow w-full px-4 md:px-0">
        <div class="flex flex-col md:flex-row w-full max-w-4xl bg-gradient-to-r from-[#92C7CF] to-white border border-white rounded-lg shadow-lg overflow-hidden">

            <!-- Left Side (Welcome Section) -->
            <div class="w-full md:w-1/2 flex flex-col items-center justify-center p-8 bg-[#92C7CF]">
                <img src="{{ asset('assets/loginpict/skincare.jpg') }}" alt="Gambar skincare" class="w-40 sm:w-52 md:w-72 mx-auto mb-6">
                <h3 class="text-black text-2xl font-semibold mb-4 text-center">Selamat Datang!</h3>
                <p class="text-black text-center text-sm md:text-base">Silahkan mendaftar untuk bergabung bersama kami.</p>
            </div>

            <!-- Right Side (Register Form) -->
            <div class="w-full md:w-1/2 p-8 flex flex-col items-center justify-center">
                <!-- Logo Above the Form -->
                <img src="{{ asset('assets/loginpict/logo.png') }}" alt="Logo" class="w-20 h-20 bg-white rounded-full mb-6 mx-auto">

                <h2 class="text-2xl font-bold mb-6 text-center">Register</h2>

                <!-- Input Fields for Registration -->
                <form class="RegistUser w-full max-w-sm" action="{{ route('SubmitRegister') }}" method="POST">
                    @csrf
                    <input type="text" name="name" id="name" placeholder="Nama" class="w-full p-3 mb-4 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500">
                    <input type="email" name="email" id="email" placeholder="Email" class="w-full p-3 mb-4 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500">
                    <input type="password" name="password" id="password" placeholder="Password" class="w-full p-3 mb-4 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500">

                    <!-- Register Button with Validation -->
                    <button type="submit" class="w-full bg-blue-500 text-white p-3 rounded-lg mb-4 hover:bg-blue-600">Buat Akun</button>
                </form>
                
                <!-- Link to Login Page -->
                <p class="text-center text-gray-500 text-sm">
                    Kembali ke halaman 
                    <a href="{{ route('login') }}" class="text-blue-500 hover:text-blue-700 underline">Login</a>
                </p>
            </div>
        </div>
    </div>

    <footer class="bg-gray-800 text-white py-4 w-full mt-8">
        <div class="container mx-auto text-center">
            <p class="text-sm">&copy; 2024 Nama Website. All rights reserved.</p>
            <p class="text-sm mt-1">Dibuat dengan <span class="text-red-500">❤</span> oleh Tim Kami</p>
        </div>
    </footer>

</body>
</html>

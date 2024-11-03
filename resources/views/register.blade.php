<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="flex flex-col items-center justify-center min-h-screen" style="background: linear-gradient(to right, #92C7CF, white);">
    <div class="flex w-[700px] bg-white rounded-lg shadow-lg overflow-hidden mb-8">
        <!-- Left Side (Welcome Section) -->
        <div class="w-1/2 flex flex-col items-center justify-center p-8" style="background-color: #92C7CF;">
            <img src="{{ asset('assets/loginpict/skincare.jpg') }}" alt="Gambar skincare" class="w-61 mx-52">
            <h3 class="text-black text-2xl font-semibold mb-4">Selamat Datang!</h3>
            <p class="text-black text-center">Silahkan mendaftar untuk bergabung bersama kami.</p>
        </div>
        
        <!-- Right Side (Register Form) -->
        <div class="w-1/2 p-8 flex flex-col items-center justify-center h-full">
            <!-- Logo Above the Form -->
            <img src="{{ asset('assets/loginpict/logo.png') }}" alt="Logo" class="w-20 h-20 bg-white rounded-full mb-6 mx-auto">

            <h2 class="text-2xl font-bold mb-6 text-center">Register</h2>

            <!-- Input Fields for Registration -->
            <div class="flex gap-4 mb-4 w-full">
                <input type="text" placeholder="Nama Depan" class="w-1/2 p-3 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500">
                <input type="text" placeholder="Nama Belakang" class="w-1/2 p-3 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500">
            </div>
            <input type="email" placeholder="Email" class="w-full p-3 mb-4 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500">
            <input type="password" placeholder="Password" class="w-full p-3 mb-4 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500">

            <!-- Register Button with Hover Effect -->
            <button onclick="showSuccessMessage()" class="w-full bg-blue-500 text-white p-3 rounded-lg mb-4 hover:bg-blue-600">Buat Akun</button>

            <!-- Success Message -->
            <div id="successMessage" class="hidden text-green-500 text-center mb-4">
                Kamu berhasil membuat akun! Mengarahkan ke halaman Login...
            </div>

            <!-- Link to Login Page -->
            <p class="text-center text-gray-500 text-sm">
                Kembali ke halaman 
                <button onclick="window.location='{{ route('login') }}'" class="text-blue-500 hover:text-blue-700 underline">Login</button>
            </p>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-[#92C7CF] text-white py-4 w-full">
        <div class="container mx-auto text-center">
            <p class="text-sm">&copy; 2024 Nama Website. All rights reserved.</p>
            <p class="text-sm mt-1">Dibuat dengan <span class="text-red-500">❤</span> oleh Tim Kami</p>
        </div>
    </footer>

    <script>
        function showSuccessMessage() {
            // Menampilkan pesan sukses
            const messageDiv = document.getElementById('successMessage');
            messageDiv.classList.remove('hidden'); // Menghilangkan kelas hidden

            // Mengarahkan ke halaman login setelah 3 detik
            setTimeout(() => {
                window.location.href = '{{ route('login') }}';
            }, 3000);
        }
    </script>
</body>
</html>

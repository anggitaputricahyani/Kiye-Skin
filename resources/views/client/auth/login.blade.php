<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="flex flex-col h-screen" style="background: linear-gradient(to right, #92C7CF, white);">
    <div class="flex w-[800px] bg-blue-40 border-2 border-white rounded-lg shadow-lg overflow-hidden mx-auto my-auto">
        <!-- Left Side (Login Form) -->
        <div class="w-1/2 p-8 flex flex-col items-center">

            <!-- Home Icon and Title Centered -->
            <div class="flex flex-col items-center mb-6">
                <a href="/" class="p-2 bg-gray-200 rounded-full mb-4">
                    <img src="{{ asset('assets/loginpict/logo.png') }}" alt="Gambar google" class="w-10 h-10">
                </a>                
                <h2 class="text-2xl font-bold">Masuk</h2>
            </div>

            <!-- Social Login Buttons -->
            <div class="flex gap-4 mb-6">
                <button class="p-2 bg-white-100 rounded-full"><img src="{{ asset('assets/loginpict/google.png') }}" alt="Gambar google" class="w-8 h-8"></button>
                <button class="p-2 bg-white-100 rounded-full"><img src="{{ asset('assets/loginpict/facebook.png') }}" alt="Gambar facebook" class="w-8 h-8"></button>
            </div>
            <p class="text-gray-500 text-sm mb-4">Or Use Your Email Password</p>
            
            <!-- Display validation errors -->
            @if($errors->any())
                <div class="bg-red-500 text-white p-3 rounded mb-4 w-full">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            
            <!-- Input Fields -->
            <form class="userlogin" method="POST" action="{{ route('login') }}">
                @csrf
                <input name="email" type="text" placeholder="Your Email" value="{{ old('email') }}" class="w-full p-3 mb-4 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500" required>
                <input name="password" type="password" placeholder="Password" class="w-full p-3 mb-4 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500" required>
                
                <!-- Sign In Button -->
                <button type="submit" class="w-full bg-blue-500 text-white p-3 rounded-lg hover:bg-blue-600">Sign In</button>
            </form>
           
            <a href="#" class="text-sm text-gray-500 mb-6 inline-block">Forgot Your Password?</a>
        </div>
        
        <!-- Right Side (Welcome Section) -->
        <div class="w-1/2 bg-teal-500 flex flex-col items-center justify-center p-8">
            <img src="{{ asset('assets/loginpict/skincare.jpg') }}" alt="Gambar skincare" class="w-61 mx-52">
            <h2 class="text-black text-2xl font-bold mb-4">Selamat Datang</h2>
            <p class="text-black text-center mb-6">Jika Anda belum memiliki akun, silakan daftar terlebih dahulu</p>
            <!-- Sign Up Button -->
            <a href="{{ route('register') }}" class="border border-blue-500 text-blue-500 bg-transparent px-6 py-2 rounded-lg hover:bg-blue-500 hover:text-white">Sign Up</a>
        </div>
    </div>

    <footer class="bg-gray-800 text-white text-center py-4 mt-4">
        <p>&copy; 2024 Your Company Name. All rights reserved.</p>
        <p><a href="#" class="text-blue-400 hover:underline">Privacy Policy</a> | <a href="#" class="text-blue-400 hover:underline">Terms of Service</a></p>
    </footer>
</body>
</html>

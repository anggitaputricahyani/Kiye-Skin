<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Nama Website</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

</head>
<body class="bg-primary">
    <header class="container mx-auto py-6">
        <div class="flex justify-between items-center">
            <h1 class="text-2xl font-bold text-gray-800">Logo/Nama website</h1>
            <nav class="flex space-x-6">
                <a href="#" class="text-gray-700 hover:text-gray-900">Home</a>
                <a href="#" class="text-gray-700 hover:text-gray-900">About</a>
                <a href="#" class="text-gray-700 hover:text-gray-900">Store</a>
                <button class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-xl">Check Kulit</button>
                <button class="bg-blue-300 hover:bg-blue-600 text-white font-bold py-2 px-3 rounded-md">Login</button>
            </nav>
        </div>
    </header>

    <main class="container mx-auto flex flex-col lg:flex-row items-center py-16">
        <!-- Left Section -->
        <div class="lg:w-1/2 text-center lg:text-left">
            <h2 class="text-xl text-gray-700">INI BUAT HEADER</h2>
            <h1 class="text-5xl lg:text-6xl font-bold text-blue-700 mt-2">NAMA WEBSITE</h1>
            <p class="text-lg text-gray-700 mt-4">Deskripsi website blalaskdaskskdakmsdskssdak</p>
            <p class="text-sm text-gray-600 mt-2 font-medium">Quotes/ Deskripsi Tambahan</p>
            <div class="mt-6 flex justify-center lg:justify-start space-x-4">
                <a href="#" class="bg-blue-400 hover:bg-green-500 text-black px-6 py-3 rounded-xl">Check Kulit Anda</a>
                <a href="#" class="bg-blue-500 hover:bg-blue-600 text-white px-6 py-3 rounded ">Shop Now</a>
            </div>
        </div>

        <!-- Right Section -->
        <div class="lg:w-1/2 mt-8 lg:mt-0 flex justify-center">
            <div class="bg-purple-500 text-white h-64 w-64 flex items-center justify-center rounded-lg shadow-lg">
                Gambar
            </div>
        </div>
    </main>
</body>
</html>

@extends('layout.master')

@section('content')
    <section x-data="{ page: 'homepage', darkMode: false, stickyMenu: false }" 
        x-init="darkMode = JSON.parse(localStorage.getItem('darkMode')); $watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))"
        :class="{ 'dark': darkMode }">
        
        {{-- Preloader --}}
        @include('partials.preloader')

        {{-- Navigation Bar --}}
        <header class="bg-white shadow-md dark:bg-gray-900">
            <div class="container mx-auto px-4 py-4 flex justify-between items-center">
                <div class="text-lg font-bold">Logo/Nama website</div>
                <nav class="flex items-center space-x-6">
                    <a href="#" class="text-sm font-medium text-gray-700 dark:text-gray-300">Home</a>
                    <a href="#" class="text-sm font-medium text-gray-700 dark:text-gray-300">About</a>
                    <a href="#" class="text-sm font-m<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nama Website</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gradient-to-r from-purple-200 to-purple-100">
    <header class="container mx-auto py-8">
        <div class="flex justify-between items-center">
            <div class="flex items-center">
                <h1 class="text-2xl font-bold text-gray-800">Logo/Nama website</h1>
            </div>
            <div class="flex space-x-6">
                <a href="#" class="text-gray-600 hover:text-gray-800">Home</a>
                <a href="#" class="text-gray-600 hover:text-gray-800">About</a>
                <a href="#" class="text-gray-600 hover:text-gray-800">Store</a>
                <button class="bg-purple-500 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded">Check Kulit</button>
                <button class="bg-purple-500 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded">Login</button>
            </div>
        </div>
        <div class="mt-8">
            <h2 class="text-4xl font-bold text-gray-800">INI BUAT HEADER</h2>
            <h1 class="text-7xl font-extrabold text-gray-800 mt-2">NAMA WEBSITE</h1>
            <p class="text-lg text-gray-600 mt-4">Deskripsi website blalaskdaskskdakmsdskssdak</p>
        </div>
    </header>

    <edium text-gray-700 dark:text-gray-300">Store</a>
                    <a href="#" class="bg-purple-500 text-white px-4 py-2 rounded">Check Kulit</a>
                    <a href="#" class="bg-purple-300 text-white px-4 py-2 rounded">Login</a>
                </nav>
            </div>
        </header>

        {{-- Main Content --}}
        <main class="bg-gradient-to-r from-purple-200 to-purple-300 min-h-screen">
            <div class="container mx-auto px-4 py-16 flex flex-col lg:flex-row justify-between items-center">
                
                {{-- Left Section --}}
                <div class="max-w-lg text-center lg:text-left">
                    <h2 class="text-xl text-gray-600 font-medium">INI BUAT HEADER</h2>
                    <h1 class="text-6xl font-bold text-purple-700 mt-2">NAMA WEBSITE</h1>
                    <p class="text-lg text-gray-700 mt-4">Deskripsi website blalaskdaskdskdakmsdskssdak</p>
                    <p class="text-sm text-gray-600 mt-2 font-medium">Quotes/ Deskripsi Tambahan</p>
                    <div class="mt-6 flex justify-center lg:justify-start space-x-4">
                        <a href="#" class="bg-yellow-400 text-black px-6 py-3 rounded shadow-md">Check Kulit Anda</a>
                        <a href="#" class="bg-purple-500 text-white px-6 py-3 rounded shadow-md">Shop Now</a>
                    </div>
                </div>

                {{-- Right Section --}}
                <div class="bg-purple-500 text-white h-64 w-64 flex items-center justify-center rounded-lg shadow-lg mt-8 lg:mt-0">
                    Gambar
                </div>
            </div>
        </main>

        {{-- Footer --}}
        @include('partials.footer')

    </section>
@endsection

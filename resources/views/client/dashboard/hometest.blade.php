<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KIYE-SKIN</title>
    @vite(['resources/css/app.css', 'resources/js/app.js']) 

</head>
@extends('client.dashboard.navbar') 
<body>
    <section class=" flex h-screen ">
        <div class="flex items-center min-h-screen ">
            <div class=" w-3/4 h-auto ">
                <img src="{{'assets/img/gambar3.png'}}" alt="" class="object-cover w-full h-auto ">
            </div>

        </div>

        <div class="w-1/2 items-center mr-12 pt-48">
    <h1 class="text-5xl font-bold text-center whitespace-nowrap  text-blue-700">Test Kesehatan Kulit Anda</h1>
    <p class="  text-center pt-2 font-light w-full max-w-xl mx-auto ">
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempora, voluptates, rem maxime unde, omnis veritatis fuga laboriosam aliquid quisquam molestias qui officia eius! Cum recusandae vero odio, est error cupiditate Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus natus minus sint, reiciendis ex, facilis dolore nihil consequatur aspernatur maiores molestiaee, commodi similique! Eveniet.
    </p>
    <div class="flex justify-center pt-6"> <!-- Tambahkan div ini untuk membungkus tombol -->
        <a href="#" class="bg-blue-700 rounded-md  text-white py-2 px-16 text-sm font-bold">Test Sekarang</a>
    </div>
</div>


     
    </section>
    
</body>
</html>
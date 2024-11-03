<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class pagecontroller extends Controller
{
       // Metode untuk halaman homepage
       public function homepage()
       {
           return view('homepage');
       }
   
       // Metode untuk halaman store
       public function store()
       {
           return view('store');
       }
}

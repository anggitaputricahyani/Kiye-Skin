<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function store()
       {
           return view('store');
       }

       public function homepage()
    {
        return view('homepage');
    }
}

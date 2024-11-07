<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class hometestController extends Controller
{
    public function homepage()
    {
        return view('client.dashboard.hometest');
    }
}

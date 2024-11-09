<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class detailprodukcontroller extends Controller
{
    public function detailProduk()
    {
        return view('client.dashboard.detailProduk');
    }

}

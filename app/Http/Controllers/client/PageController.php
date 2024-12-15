<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Produk;

class PageController extends Controller
{
    public function index(Request $request)
    {
        // Ambil kategori dari query string (misalnya ?kategori=Serum)
        $kategori = $request->query('kategori');

        // Filter produk berdasarkan kategori jika ada
        if ($kategori) {
            $produks = Produk::where('kategori', $kategori)->get();
        } else {
            $produks = Produk::all();
        }

        // Kirim data ke view
        return view('client.dashboard.store', compact('produks', 'kategori'));
    }
}


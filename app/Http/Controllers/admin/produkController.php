<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Produk;
use Illuminate\Http\Request;
use Storage;

class produkController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        # membuat variabel untuk menampung data product
        $data = produk::query()
            ->get();

        # mengembalikan ke dalam template dengan membawa variabel
        return view('admin.dashboard.menu.tambahProduk', compact('data'));
    }

    public function storeView()
{
    $produks = Produk::all(); // Ambil semua data produk
    return view('client.dashboard.store', compact('produks')); // Kirim data ke view
}

public function show($id)
{
    $produk = Produk::findOrFail($id);  // Menemukan produk
    dd($produk->gambar);  // Kode ini akan menghentikan eksekusi, kode setelahnya tidak akan dijalankan
    return view('produk.show', compact('produkS'));  // Tidak bisa dijangkau
}





    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        # membuat template create product
        return view('admin.dashboard.menu.Produk.tambahProduk');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validasi request dari form 
        $request->validate([
            'nama_produk' => 'required',
            'harga' => 'required|numeric',
            'skin_type' => 'required|in:Kering(Dry),Berminyak(Oily),Normal_Skin,Kombinasi_skin(Dry_Oily)',
            'kategori' => 'required|in:Serum,Moisturizer,Sunscreen,Facial_wash,Toner',
            'stok' => 'required|numeric',
            'deskripsi' => 'required',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',

        ], [
            'nama_produk.required' => 'Wajib di isi',
            'harga.required' => 'Wajib di isi',
            'harga.numeric' => 'Harga Wajib Angka',
            'skin_type.required' => 'Wajib di isi',
            'kategori.required' => 'Wajib di isi',
            'stok.required' => 'Wajib di isi',
            'stok.numeric' => 'Stok Wajib Angka',
            'deskripsi.required' => 'Wajib di isi',
            'gambar.required'=>'wajib di isi'
        ]);

    
        
        produk::create([
            'nama_produk' => $request->nama_produk,
            'harga' => $request->harga,
            'skin_type' => $request->skin_type,
            'kategori' => $request->kategori,
            'stok' => $request->stok,
            'deskripsi' => $request->deskripsi,
            'gambar'=> $request->gambarpath,
            //'slug' => str_replace(' ', '-', $request->title)
        ]);
        # akhir query


        // balikan ke halaman list product
        return redirect()->route('admin.dashboard.menu.Produk.tambahProduk')->with('success', 'Produk   Berhasil di tambahkan');
    }    
}

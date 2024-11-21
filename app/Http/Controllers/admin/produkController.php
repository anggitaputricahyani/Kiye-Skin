<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Produk;
use Illuminate\Http\Request;

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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        # membuat template create product
        return view('admin.dashboard.menu.tambahProduk');
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
            'nomor' => 'required|numeric',
            'nama_produk' => 'required',
            'harga' => 'required|numeric',
            'stok' => 'required|numeric',
            'deskripsi' => 'required',
        ], [
            'nomor.required' => 'Wajib di isi',
            'nomor.numeric' => 'Nomor Wajib Angka',
            'nama_produk.required' => 'Wajib di isi',
            'harga.required' => 'Wajib di isi',
            'harga.numeric' => 'Harga Wajib Angka',
            'stok.required' => 'Wajib di isi',
            'stok.numeric' => 'Stok Wajib Angka',
            'deskripsi.required' => 'Wajib di isi',
        ]);

        # membuat variabel baru untuk penamaan file image kita menggunakan time() agar unique tidak sama dengan gambar lain
       

        # gunakan query untuk update data baru kedalam database dengan memanggil model product

        # awal query
        
        produk::create([
            'nomor' => $request->nomor,
            'nama_produk' => $request->nama_produk,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'deskripsi' => $request->deskripsi,
            //'slug' => str_replace(' ', '-', $request->title)
        ]);
        # akhir query


        // balikan ke halaman list product
        return redirect()->route('admin.dashboard.menu.tambahProduk')->with('success', 'Produk   Berhasil di tambahkan');
    }

    public function storeuser(Request $request)
    {
        // validasi request dari form 
        $request->validate([
            'nama' => 'required',
            'nomor_hp' => 'required|numeric',
            'alamat' => 'required',
            'tanggal' => 'required',
            'asal' => 'required',
            'tujuan' => 'required',
            'pembayaran' => 'required',
            'kendaraan' => 'required'
        ], [
            'nama.required' => 'Wajib di isi',
            'nomor_hp.required' => 'Wajib di isi',
            'nomor_hp.numeric' => 'Harga Wajib Angka',
            'alamat.required' => 'Wajib di isi',
            'tanggal.required' => 'Wajib di isi',
            'asal.required' => 'Wajib di isi',
            'tujuan.required' => 'Wajib di isi',
            'pembayaran.required' => 'Wajib di isi',
            'kendaraan.required' => 'Wajib di isi'
        ]);

        # membuat variabel baru untuk penamaan file image kita menggunakan time() agar unique tidak sama dengan gambar lain
       

        # gunakan query untuk update data baru kedalam database dengan memanggil model product

        # awal query
        
        Product::create([
            'nomor' => $request->nomor,
            'nama_produk' => $request->nama_produk,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'deskripsi' => $request->deskripsi,
            'slug' => str_replace(' ', '-', $request->title)
        ]);
        # akhir query


        // balikan ke halaman list product
       return to_route('produks.store.view');
    }

    function viewqr()   { return view('qr')->with('success', 'Product Berhasil di tambahkan');
        
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        # membuat variabel untuk menampung data produk dari where by Id
        $data = Product::find($id);

        # gunakan if kondisi jika data diatas kosong atau ID tidak sesuai pada database
        if (empty($data)) {
            # jika data kosong empty() maka 
            return redirect()->route('product.index')->with('galat', 'product not found');
            # fungsi with() adalah untuk membawa notifikasi dengan session yang berupa pemberitahuan
        }

        # jika variabel data ada tidak kosong maka kita kembalikan kedalam view edit untuk mengubah data tersebut
        return view('backend.product.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        # membuat variabel untuk cek apakah id tersebut ada atau tidak menggunakan find / where by id 
        $data = Product::find($id);

        # membuat if satu kondisi dimana jika kosong data tersebut akan di kembalikan
        if (empty($data)) {
            # kembalikan ke halaman list product dengan notifikasi with
            return redirect()->route('product.index')->with('galat', 'product not found');
        }

        # membuat validasi kembali dari request yang didapatkan dari form update
        $request->validate([
            'nama' => 'required',
            'nomor_hp' => 'required|numeric',
            'alamat' => 'required',
            'tanggal' => 'required',
            'asal' => 'required',
            'tujuan' => 'required',
            'pembayaran' => 'required',
            'kendaraan' => 'required'
        ], [
            'nama.required' => 'Wajib di isi',
            'nomor_hp.required' => 'Wajib di isi',
            'nomor_hp.numeric' => 'Harga Wajib Angka',
            'alamat.required' => 'Wajib di isi',
            'tanggal.required' => 'Wajib di isi',
            'asal.required' => 'Wajib di isi',
            'tujuan.required' => 'Wajib di isi',
            'pembayaran.required' => 'Wajib di isi',
            'kendaraan.required' => 'Wajib di isi'
        ]);
        if ($request->data){

            $data->validate([
                'nama' => $request->nama,
                'nomor_hp' => $request->nomor_hp,
                'alamat' => $request->alamat,
                'tanggal' => $request->tanggal,
                'asal' => $request->asal,
                'tujuan' => $request->tujuan,
                'pembayaran' => $request->pembayaran,
                'kendaraan' => $request->kendaraan,
            ]);
                

        }else{
            $data->update([
                'nama' => $request->nama,
                'nomor_hp' => $request->nomor_hp,
                'alamat' => $request->alamat,
                'tanggal' => $request->tanggal,
                'asal' => $request->asal,
                'tujuan' => $request->tujuan,
                'pembayaran' => $request->pembayaran,
                'kendaraan' => $request->kendaraan,
            ]);
        }
        
        

        # kembalikan hasil controller ini ke halaman list product
        return redirect()->route('product.index')->with('success', 'Product Berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        # membuat variabel untuk cek apakah id tersebut ada atau tidak menggunakan find / where by id 
        $data = Product::find($id);
        // dd($data);

        # membuat if satu kondisi dimana jika kosong data tersebut akan di kembalikan
        if (empty($data)) {
            # kembalikan ke halaman list product dengan notifikasi with
            return redirect()->route('product.index')->with('galat', 'product not found');
        }

        # gunakan fitur unlink untuk menghapus gambar pada folder penyimpanan kita sesuai dengan nama file pada database
        # unlink(public_path('img/' . $data->image));

        # gunakan query delete orm untuk menghapus data pada tabel

        # awal query
        $data->delete();
        # akhir query

        # kembalikan hasil controller ini ke halaman list product
        return redirect()->route('product.index')->with('success', 'Product Berhasil di Hapus');
    } 

    
}

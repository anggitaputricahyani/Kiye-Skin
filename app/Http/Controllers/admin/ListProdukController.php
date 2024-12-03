<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Produk;
use Illuminate\Http\Request;

class ListProdukController extends Controller
{
    public function index()
    {
        # membuat variabel untuk menampung data product
        $data = Produk::query()->get();

        # mengembalikan ke dalam template dengan membawa variabel
        return view('admin.dashboard.menu.Produk.list', compact('data'));
    }

    public function create()
{
    return view('admin.dashboard.menu.Produk.tambahProduk');
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
        $data = Produk::find($id);

        # gunakan if kondisi jika data diatas kosong atau ID tidak sesuai pada database
        if (empty($data)) {
            # jika data kosong empty() maka 
            return redirect()->route('product.index')->with('galat', 'product not found');
            # fungsi with() adalah untuk membawa notifikasi dengan session yang berupa pemberitahuan
        }

        # jika variabel data ada tidak kosong maka kita kembalikan kedalam view edit untuk mengubah data tersebut
        return view('admin.dashboard.menu.Produk.editProduk', compact('data'));
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
        $request->validate([
            'nama_produk' => 'required|string|max:255',
            'harga' => 'required|numeric',
            'skin_type' => 'required|in:Kering(Dry),Berminyak(Oily),Normal_Skin,Kombinasi_skin(Dry_Oily)',
            'kategori' => 'required|in:Serum,Moisturizer,Sunscreen,Facial_wash,Toner',
            'stok' => 'required|numeric',
            'deskripsi' => 'required',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            // Validasi lainnya
        ]);
    
        $produk = Produk::find($id);
        if (!$produk) {
            return redirect()->route('list.index')->with('error', 'Produk tidak ditemukan.');
        }
    
        $produk->update($request->all());
    
        return redirect()->route('list.index')->with('success', 'Produk berhasil diperbarui.');
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
        $data = Produk::find($id);
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

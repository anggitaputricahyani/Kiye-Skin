<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KeranjangProduk;
use App\Models\Produk;

class KeranjangProdukController extends Controller
{
    /**
     * Generate a unique ID for the keranjang.
     */
    private function generateIdKeranjang($userId)
    {
        $prefix = 'KRJ';
        $urut = KeranjangProduk::where('user_id', $userId)->max('id') + 1; // Urutan berdasarkan ID terakhir
        return sprintf('%s-%03d-%02d', $prefix, $urut, $userId);
    }

    /**
     * Tambah produk ke keranjang.
     */
    public function tambahKeKeranjang(Request $request, $produkId)
    {
        $user = auth()->user();
        $produk = Produk::findOrFail($produkId);

        // Cek apakah ada keranjang aktif untuk user
        $keranjangAktif = KeranjangProduk::where('user_id', $user->id)
            ->where('status', 'belum_dipesan')
            ->first();

        if (!$keranjangAktif) {
            // Generate ID Keranjang baru jika tidak ada keranjang aktif
            $idKeranjang = $this->generateIdKeranjang($user->id);
        } else {
            $idKeranjang = $keranjangAktif->id_keranjang;
        }

        // Cek apakah produk sudah ada di keranjang aktif
        $itemKeranjang = KeranjangProduk::where([
            ['id_keranjang', '=', $idKeranjang],
            ['produk_id', '=', $produkId],
        ])->first();

        if ($itemKeranjang) {
            // Update kuantitas dan harga_total
            $itemKeranjang->kuantitas += $request->input('kuantitas', 1);
            $itemKeranjang->harga_total = $itemKeranjang->kuantitas * $produk->harga;
            $itemKeranjang->save();
        } else {
            // Tambahkan produk baru ke keranjang
            KeranjangProduk::create([
                'id_keranjang' => $idKeranjang,
                'user_id' => $user->id,
                'produk_id' => $produkId,
                'kuantitas' => $request->input('kuantitas', 1),
                'harga_total' => $produk->harga * $request->input('kuantitas', 1),
                'status' => 'belum_dipesan',
            ]);
        }

        return response()->json(['message' => 'Produk berhasil ditambahkan ke keranjang', 'id_keranjang' => $idKeranjang]);
    }

    /**
     * Kurangi produk dari keranjang.
     */
    public function kurangiDariKeranjang(Request $request, $produkId)
    {
        $user = auth()->user();
        $keranjangAktif = KeranjangProduk::where('user_id', $user->id)
            ->where('produk_id', $produkId)
            ->where('status', 'belum_dipesan')
            ->first();

        if (!$keranjangAktif) {
            return response()->json(['message' => 'Produk tidak ditemukan di keranjang'], 404);
        }

        // Kurangi kuantitas
        $keranjangAktif->kuantitas -= $request->input('kuantitas', 1);

        if ($keranjangAktif->kuantitas <= 0) {
            // Hapus produk jika kuantitas menjadi 0
            $keranjangAktif->delete();
        } else {
            // Update harga_total
            $keranjangAktif->harga_total = $keranjangAktif->kuantitas * $keranjangAktif->produk->harga;
            $keranjangAktif->save();
        }

        return response()->json(['message' => 'Produk berhasil dikurangi dari keranjang']);
    }

    /**
     * Lihat semua produk di keranjang untuk user.
     */
    public function lihatKeranjang()
    {
        $user = auth()->user();
        $keranjang = KeranjangProduk::where('user_id', $user->id)
            ->where('status', 'belum_dipesan')
            ->with('produk') // Pastikan relasi 'produk' sudah ada
            ->get();
    
        return view('client.dashboard.cart', ['keranjang' => $keranjang]);
    }

    /**
     * Checkout keranjang (ubah status menjadi 'dipesan').
     */
    public function checkoutKeranjang()
    {
        $user = auth()->user();
        $keranjang = KeranjangProduk::where('user_id', $user->id)
            ->where('status', 'belum_dipesan')
            ->update(['status' => 'dipesan']);

        return response()->json(['message' => 'Keranjang berhasil di-checkout']);
    }

     // Update kuantitas produk dalam keranjang
     public function updateKeranjang(Request $request, $produkId)
     {
         $user = auth()->user();
 
         $itemKeranjang = KeranjangProduk::where('user_id', $user->id)
             ->where('produk_id', $produkId)
             ->where('status', 'belum_dipesan')
             ->first();
 
         if (!$itemKeranjang) {
             return response()->json(['message' => 'Produk tidak ditemukan di keranjang'], 404);
         }
 
         $kuantitasBaru = $request->input('kuantitas', 1);
         if ($kuantitasBaru <= 0) {
             return $this->hapusKeranjang($produkId); // Jika kuantitas <= 0, hapus produk
         }
 
         $itemKeranjang->kuantitas = $kuantitasBaru;
         $itemKeranjang->harga_total = $kuantitasBaru * $itemKeranjang->produk->harga;
         $itemKeranjang->save();
 
         return response()->json(['message' => 'Keranjang berhasil diperbarui', 'item' => $itemKeranjang]);
     }
 
     // Hapus produk dari keranjang
     public function hapusKeranjang($produkId)
     {
         $user = auth()->user();
 
         $itemKeranjang = KeranjangProduk::where('user_id', $user->id)
             ->where('produk_id', $produkId)
             ->where('status', 'belum_dipesan')
             ->first();
 
         if (!$itemKeranjang) {
             return response()->json(['message' => 'Produk tidak ditemukan di keranjang'], 404);
         }
 
         $itemKeranjang->delete();
 
         return response()->json(['message' => 'Produk berhasil dihapus dari keranjang']);
     }
}

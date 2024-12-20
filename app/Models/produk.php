<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_produk',
        'harga',
        'skin_type',
        'kategori',
        'stok',
        'deskripsi',
        'gambar'
    ];

    public function keranjang()
    {
        return $this->hasMany(KeranjangProduk::class);
    }

}

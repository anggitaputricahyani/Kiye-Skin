<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KeranjangProduk extends Model
{
    use HasFactory;

    protected $table = 'keranjang';

    protected $fillable = [
        'id_keranjang',
        'user_id',
        'produk_id',
        'kuantitas',
        'harga_total',
        'status', // Tambahkan status
    ];
    

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function produk()
    {
        return $this->belongsTo(Produk::class);
    }

}

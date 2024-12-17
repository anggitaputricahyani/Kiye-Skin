<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function cart()
    {
        // Mengambil data produk yang ada di dalam keranjang (misalnya dari session)
        $cartItems = session('cart', []); // Asumsi data produk disimpan di session 'cart'
    
        // Menghitung total harga produk dalam keranjang
        $totalPrice = 0;
        foreach ($cartItems as $item) {
            $totalPrice += $item['price'] * $item['quantity'];
        }
    
        return view('client.cart', compact('cartItems', 'totalPrice'));
    }

    public function addToCart($id)
{
    $produk = Produk::findOrFail($id);

    // Ambil data produk
    $cart = session()->get('cart', []);

    // Jika produk sudah ada di keranjang, update kuantitasnya
    if(isset($cart[$id])) {
        $cart[$id]['quantity']++;
    } else {
        $cart[$id] = [
            'name' => $produk->nama_produk,
            'description' => $produk->deskripsi,
            'price' => $produk->harga,
            'original_price' => $produk->harga_asli,
            'image' => $produk->gambar,
            'quantity' => 1
        ];
    }

    // Simpan ke session
    session()->put('cart', $cart);

    return redirect()->route('cart');
}

    
}

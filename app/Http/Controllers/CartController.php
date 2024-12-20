<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function addToCart(Request $request) // Hanya gunakan Request $request
    {
        // Validasi data
        $request->validate([
            'product_id' => 'required|integer',
            'name' => 'required|string',
            'price' => 'required|numeric',
            'quantity' => 'required|integer|min:1',
        ]);

        // Data produk yang ditambahkan ke cart
        $product = [
            'id' => $request->product_id,
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity,
        ];

        // Ambil cart dari session
        $cart = Session::get('cart', []);

        // Periksa apakah produk sudah ada di cart
        $index = array_search($product['id'], array_column($cart, 'id'));
        if ($index !== false) {
            // Jika sudah ada, tambahkan quantity
            $cart[$index]['quantity'] += $product['quantity'];
        } else {
            // Jika belum, tambahkan produk baru
            $cart[] = $product;
        }

        // Simpan cart kembali ke session
        Session::put('cart', $cart);

        return response()->json([
            'success' => true,
            'message' => 'Produk berhasil ditambahkan ke keranjang.',
            'cart' => $cart,
        ]);
    }
}

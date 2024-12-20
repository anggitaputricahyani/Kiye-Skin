<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKeranjangTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('keranjang', function (Blueprint $table) {
            $table->id();
            $table->string('id_keranjang'); // ID unik untuk keranjang
            $table->unsignedBigInteger('user_id'); // ID pengguna
            $table->unsignedBigInteger('produk_id'); // ID produk
            $table->integer('kuantitas')->default(1); // Jumlah produk
            $table->float('harga_total')->default(0); // Harga total
            $table->enum('status', ['belum_dipesan', 'dipesan'])->default('belum_dipesan');
            $table->timestamps();

            // Relasi ke tabel users
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            // Relasi ke tabel produks
            $table->foreign('produk_id')->references('id')->on('produks')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('keranjang');
    }
}

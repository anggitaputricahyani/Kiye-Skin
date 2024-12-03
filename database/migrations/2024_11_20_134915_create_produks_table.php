<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('produks', function (Blueprint $table) {
            $table->id();
            $table->string('nama_produk');
            $table->float('harga');
            $table->enum('skin_type',['Kering(Dry)', 'Berminyak(Oily)', 'Normal_Skin', 'Kombinasi_skin(Dry_Oily)', 'Sensitif_skin(sensitive_skin)'])->default('Kering(Dry)');;
            $table->enum('kategori',['Serum', 'Moisturizer', 'Sunscreen','Facial_wash','Toner'])->default('Serum');;
            $table->integer('stok');
            $table->text('deskripsi') ->nullable();
            $table->string('gambar')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produks');
    }
};

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
        Schema::create('products', function (Blueprint $table) {

            $table->id();

            // Informasi Mobil
            $table->string('nama_produk');
            $table->string('bbm');
            $table->string('fitur');
            $table->string('area_pemakaian');
            $table->string('kapasitas');

            // Harga Rental
            $table->integer('harga_lepas_kunci');
            $table->integer('harga_sopir');

            // Gambar Produk
            $table->string('gambar');

            // Status Ketersediaan
            $table->enum('status', ['tersedia', 'tidak tersedia'])
                  ->default('tersedia');

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
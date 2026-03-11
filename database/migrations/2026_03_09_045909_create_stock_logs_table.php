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
        Schema::create('stock_logs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained()->onDelete('cascade'); // Link ke produk
            $table->integer('old_stock'); // Stok sebelum ditambah
            $table->integer('added_stock'); // Jumlah yang ditambahkan
            $table->integer('new_stock'); // Total stok akhir
            $table->string('reason')->nullable(); // Alasan (misal: "Barang Masuk" atau "Koreksi")
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stock_logs');
    }
};

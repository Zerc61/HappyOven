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
    $table->id('id_product');
    $table->foreignId('id_umkm')->constrained('umkm_profiles', 'id_umkm');
    $table->foreignId('id_category')->constrained('categories', 'id_category');
    $table->foreignId('id_type')->constrained('product_types', 'id_type');
    $table->string('nama_product');
    $table->integer('harga');
    $table->integer('stok');
    $table->text('deskripsi')->nullable();
    $table->string('foto')->nullable();
    $table->string('status_produk')->default('aktif');
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

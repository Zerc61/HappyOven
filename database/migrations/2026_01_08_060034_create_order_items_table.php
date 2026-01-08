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
        Schema::create('order_items', function (Blueprint $table) {
    $table->id('id_order_item');
    $table->foreignId('id_order')->constrained('orders', 'id_order');
    $table->foreignId('id_product')->constrained('products', 'id_product');
    $table->integer('harga');
    $table->integer('jumlah');
    $table->integer('subtotal');
    $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_items');
    }
};

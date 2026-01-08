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
        Schema::create('deliveries', function (Blueprint $table) {
    $table->id('id_delivery');
    $table->foreignId('id_order')->constrained('orders', 'id_order');
    $table->foreignId('id_driver')->constrained('drivers', 'id_driver');
    $table->string('status_pengiriman');
    $table->dateTime('waktu_kirim')->nullable();
    $table->dateTime('waktu_sampai')->nullable();
    $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('deliveries');
    }
};

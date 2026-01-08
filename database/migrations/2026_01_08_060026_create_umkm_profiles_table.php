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
        Schema::create('umkm_profiles', function (Blueprint $table) {
    $table->id('id_umkm');
    $table->foreignId('id_user')->constrained('users', 'id_user');
    $table->string('nama_toko');
    $table->text('deskripsi_toko')->nullable();
    $table->string('logo')->nullable();
    $table->text('alamat_toko');
    $table->boolean('status_verifikasi')->default(false);
    $table->float('rating')->default(0);
    $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('umkm_profiles');
    }
};

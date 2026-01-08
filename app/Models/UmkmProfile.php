<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UmkmProfile extends Model
{
    protected $primaryKey = 'id_umkm';

    protected $fillable = [
        'id_user',
        'nama_toko',
        'deskripsi_toko',
        'logo',
        'alamat_toko',
        'status_verifikasi',
        'rating',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function products()
    {
        return $this->hasMany(Product::class, 'id_umkm');
    }
}

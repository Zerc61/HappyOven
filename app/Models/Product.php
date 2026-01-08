<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $primaryKey = 'id_product';

    protected $fillable = [
        'id_umkm',
        'id_category',
        'id_type',
        'nama_product',
        'harga',
        'stok',
        'deskripsi',
        'foto',
        'status_produk',
    ];

    public function umkm()
    {
        return $this->belongsTo(UmkmProfile::class, 'id_umkm');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'id_category');
    }

    public function type()
    {
        return $this->belongsTo(ProductType::class, 'id_type');
    }
}

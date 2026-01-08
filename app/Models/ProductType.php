<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    protected $primaryKey = 'id_type';

    protected $fillable = ['nama_type'];

    public function products()
    {
        return $this->hasMany(Product::class, 'id_type');
    }
}

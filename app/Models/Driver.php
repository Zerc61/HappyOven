<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    protected $primaryKey = 'id_driver';

    protected $fillable = [
        'nama_driver',
        'no_telp',
        'status',
    ];

    public function deliveries()
    {
        return $this->hasMany(Delivery::class, 'id_driver');
    }
}

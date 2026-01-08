<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    protected $primaryKey = 'id_delivery';

    protected $fillable = [
        'id_order',
        'id_driver',
        'status_pengiriman',
        'waktu_kirim',
        'waktu_sampai',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class, 'id_order');
    }

    public function driver()
    {
        return $this->belongsTo(Driver::class, 'id_driver');
    }

    public function notifications()
    {
        return $this->hasMany(DeliveryNotification::class, 'id_delivery');
    }
}

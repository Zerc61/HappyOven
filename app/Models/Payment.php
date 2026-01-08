<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $primaryKey = 'id_payment';

    protected $fillable = [
        'id_order',
        'metode_pembayaran',
        'status',
        'tanggal_bayar',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class, 'id_order');
    }
}

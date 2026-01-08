<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DeliveryNotification extends Model
{
    protected $primaryKey = 'id_notification';

    protected $fillable = [
        'id_delivery',
        'channel',
        'status',
        'sent_at',
    ];

    public function delivery()
    {
        return $this->belongsTo(Delivery::class, 'id_delivery');
    }
}

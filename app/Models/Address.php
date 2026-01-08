<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $primaryKey = 'id_address';

    protected $fillable = [
        'id_user',
        'label',
        'alamat',
        'is_default',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}

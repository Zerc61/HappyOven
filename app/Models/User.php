<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    protected $fillable = [
        'id_role',
        'username',
        'nama',
        'email',
        'password',
        'no_telp',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function role()
    {
        return $this->belongsTo(Role::class, 'id_role');
    }

    public function umkmProfile()
    {
        return $this->hasOne(UmkmProfile::class, 'id_user');
    }

    public function addresses()
    {
        return $this->hasMany(Address::class, 'id_user');
    }

    public function carts()
    {
        return $this->hasMany(Cart::class, 'id_user');
    }

    public function orders()
    {
        return $this->hasMany(Order::class, 'id_user');
    }
}

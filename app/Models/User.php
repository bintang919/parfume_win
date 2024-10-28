<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'users'; // Tentukan nama tabel jika berbeda

    protected $fillable = [
        'username',
        'password',
        'is_active',
        'is_deleted',
        'created_date',
        'created_by',
    ];

    protected $hidden = [
        'password',
    ];

    // Jika Anda ingin menggunakan hashing untuk password
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }
}

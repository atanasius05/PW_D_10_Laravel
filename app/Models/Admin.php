<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable
{
    use Notifiable;

    protected $primaryKey = 'id_admin';

    protected $fillable = [
        'username',
        'nama',
        'email',
        'password',
        'profilePic'
    ];

    protected $hidden = [
        'password'
    ];

    public function pendaftaranSiswas()
    {
        return $this->hasMany(Pendaftaran_Siswa::class, 'id_admin', 'id_admin');
    }

    public function siswas()
    {
        return $this->hasMany(Siswa::class, 'id_admin', 'id_admin');
    }
}
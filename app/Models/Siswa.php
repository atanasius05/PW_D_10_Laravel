<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Siswa extends Authenticatable
{
    use Notifiable;

    protected $primaryKey = 'id_siswa';

    protected $fillable = [
        'id_pendaftaranSiswa',
        'id_admin',
        'id_kelas',
        'nisn',
        'nama',
        'profilePic',
        'jenis_kelamin',
        'tanggal_lahir',
        'alamat',
        'agama',
        'no_telp',
        'asal_sekolah',
        'email',
        'password',
        'status'
    ];

    protected $hidden = [
        'password'
    ];

    public function pendaftaranSiswa()
    {
        return $this->belongsTo(Pendaftaran_Siswa::class, 'id_pendaftaranSiswa', 'id_pendaftaranSiswa');
    }

    public function admin()
    {
        return $this->belongsTo(Admin::class, 'id_admin', 'id_admin');
    }

    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'id_kelas', 'id_kelas');
    }
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran_Siswa extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_pendaftaranSiswa';

     // Tambahkan nama tabel secara eksplisit
     protected $table = 'pendaftaran_siswas';

    protected $fillable = [
        'id_admin',
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
        'status',
        'tanggal_pendaftaran'
    ];

    public function admin()
    {
        return $this->belongsTo(Admin::class, 'id_admin', 'id_admin');
    }

    public function siswa()
    {
        return $this->hasOne(Siswa::class, 'id_pendaftaranSiswa', 'id_pendaftaranSiswa');
    }
}
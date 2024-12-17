<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran_Ekskul extends Model
{
    use HasFactory;

    protected $table = 'pendaftaran_ekskuls';

    protected $primaryKey = 'id_pendaftaran';
    protected $fillable = [
        'id_siswa',
        'id_ekskul',
        'tanggal_pendaftaran',
    ];

    // Relationship to Siswa
    public function siswa()
    {
        return $this->belongsTo(Siswa::class, 'id_siswa');
    }

    // Relationship to JenisEkskul
    public function jenisEkskul()
    {
        return $this->belongsTo(Jenis_Ekskul::class, 'id_ekskul');
    }

    // Relationship to Admin
    public function admin()
    {
        return $this->belongsTo(Admin::class, 'id_admin');
    }
}

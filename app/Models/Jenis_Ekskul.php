<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jenis_Ekskul extends Model
{
    use HasFactory;

    protected $table = 'jenis_ekskuls';

    protected $fillable = [
        'id_guru',
        'nama_ekskul',
        'deskripsi',
        'hari',
        'jam',
    ];

    // Relationship to Guru
    public function guru()
    {
        return $this->belongsTo(Guru::class, 'id_guru');
    }

    // Relationship to PendaftaranEkskul
    public function pendaftaranEkskuls()
    {
        return $this->hasMany(Pendaftaran_Ekskul::class, 'id_ekskul');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pendaftaran_siswas', function (Blueprint $table) {
            $table->id('id_pendaftaranSiswa');
            $table->string('nisn');
            $table->string('nama');
            $table->string('profilePic')->nullable();;
            $table->string('jenis_kelamin');
            $table->date('tanggal_lahir');
            $table->string('alamat');
            $table->string('agama');
            $table->string('no_telp');
            $table->string('asal_sekolah');
            $table->string('email');
            $table->string('password');
            $table->enum('status', ['pending', 'accepted', 'rejected'])->default('pending');
            $table->date('tanggal_pendaftaran');
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendaftaran_siswas');
    }
};

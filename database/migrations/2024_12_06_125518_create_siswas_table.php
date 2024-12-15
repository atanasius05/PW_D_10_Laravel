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
        Schema::create('siswas', function (Blueprint $table) {
            $table->id('id_siswa');
            $table->unsignedBigInteger('id_pendaftaranSiswa');
            $table->unsignedBigInteger('id_admin');
            $table->unsignedBigInteger('id_kelas');
            $table->string('nisn')->unique();
            $table->string('nama');
            $table->string('profilePic')->nullable();;
            $table->string('jenis_kelamin');
            $table->date('tanggal_lahir');
            $table->string('alamat');
            $table->string('agama');
            $table->string('no_telp');
            $table->string('asal_sekolah');
            $table->string('email')->unique();
            $table->string('password');
            $table->enum('status', ['pending', 'accepted', 'rejected'])->default('pending');
            $table->timestamps();

            $table->foreign('id_admin')->references('id_admin')->on('admins')->onDelete('cascade'); // Foreign key
            $table->foreign('id_kelas')->references('id_kelas')->on('kelas')->onDelete('cascade'); // Foreign key
            $table->foreign('id_pendaftaranSiswa')->references('id_pendaftaranSiswa')->on('pendaftaran_siswas')->onDelete('cascade'); // Foreign key
        }); 
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswas');
    }
};

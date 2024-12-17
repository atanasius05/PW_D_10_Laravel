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
        Schema::create('pendaftaran_ekskuls', function (Blueprint $table) {
            $table->id('id_pendaftaran');
            $table->unsignedBigInteger('id_siswa');
            $table->unsignedBigInteger('id_ekskul');
            $table->date('tanggal_pendaftaran');
            $table->timestamps();

            $table->foreign('id_siswa')->references('id_siswa')->on('siswas')->onDelete('cascade'); // Foreign key
            $table->foreign('id_ekskul')->references('id_ekskul')->on('jenis_ekskuls')->onDelete('cascade'); // Foreign key
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendaftaranekskuls');
    }
};

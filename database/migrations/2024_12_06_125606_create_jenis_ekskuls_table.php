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
        Schema::create('jenis_ekskuls', function (Blueprint $table) {
            $table->id('id_ekskul');
            $table->unsignedBigInteger('id_guru');
            $table->string('nama_ekskul');
            $table->text('deskripsi');
            $table->string('hari');
            $table->time('jam');
            $table->timestamps();

            $table->foreign('id_guru')->references('id_guru')->on('gurus')->onDelete('cascade'); // Foreign key
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jenis_ekskuls');
    }
};

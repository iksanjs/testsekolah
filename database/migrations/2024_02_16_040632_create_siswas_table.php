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
        Schema::create('siswa', function (Blueprint $table) {
            $table->unsignedBigInteger('nisn')->primary();
            $table->string('nis')->unique();
            $table->string('nama_siswa');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('alamat');
            $table->string('asal_sekolah');
            $table->string('nama_ayah');
            $table->string('alamat_ayah');
            $table->string('pekerjaan_ayah');
            $table->string('nama_ibu');
            $table->string('alamat_ibu');
            $table->string('pekerjaan_ibu');
            $table->timestamps();
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

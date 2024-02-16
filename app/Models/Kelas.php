<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $fillable = ['tahun_ajaran', 'kelas', 'nisn']; // Mengatur properti yang dapat diisi secara massal

    // Definisikan hubungan antara kelas dan siswa
    public function siswa()
    {
        return $this->hasMany(Siswa::class, 'nisn');
    }
}

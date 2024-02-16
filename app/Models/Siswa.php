<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $primaryKey = 'nisn'; // Mengatur kunci utama model
    public $incrementing = false; // Menonaktifkan auto-incrementing pada kunci utama
    protected $fillable = [
        'nisn', 
        'nis', 
        'nama_siswa', 
        'tempat_lahir', 
        'tanggal_lahir', 
        'alamat', 
        'asal_sekolah', 
        'nama_ayah', 
        'alamat_ayah', 
        'pekerjaan_ayah', 
        'nama_ibu', 
        'alamat_ibu', 
        'pekerjaan_ibu'
    ];

    // Definisikan hubungan antara siswa dan kelas
    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'nisn');
    }
}

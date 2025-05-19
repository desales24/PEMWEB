<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Beasiswa extends Model
{
    use HasFactory;
    protected $table = 'beasiswas';
    protected $fillable = [
        'nama',
        'deskripsi',
        'tanggal_mulai',
        'tanggal_selesai',
    ];
    public function mahasiswas()
    {
        return $this->hasMany(Mahasiswa::class);
    }
    public function pendaftarans()
    {
        return $this->hasMany(Pendaftaran::class);
    }
}

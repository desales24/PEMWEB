<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kriteria extends Model
{
    use HasFactory;
    protected $table = 'kriterias';
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
}

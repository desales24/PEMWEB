<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $table = 'mahasiswas';
    protected $fillable = [
        'nama',
        'nim',
        'email',
        'ipk',
        'semester',
        'penghasilan_orangtua',
        'jurusan',
    ];
    public function beasiswa()
    {
        return $this->belongsTo(Beasiswa::class);
    }
    public function pendaftaran()
    {
        return $this->hasMany(Pendaftaran::class);
    }
}

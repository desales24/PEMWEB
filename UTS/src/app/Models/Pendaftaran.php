<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    use HasFactory;
    protected $table = 'pendaftarans';
    protected $fillable = [
        'mahasiswa_id',
        'beasiswa_id',
        'tanggal_daftar',
        'status',
        'keterangan',
    ];
    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class);
    }
    public function beasiswa()
    {
        return $this->belongsTo(Beasiswa::class);
    }
}

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

    protected $guarded = ['id'];

    public function mahasiswa()
    {
        return $this->belongsTo(\App\Models\Mahasiswa::class, 'mahasiswa_id');
    }

    public function beasiswa()
    {
        return $this->belongsTo(\App\Models\Beasiswa::class, 'beasiswa_id');
    }
    protected static function booted()
    {
        static::creating(function ($pendaftaran) {
            $mahasiswa = $pendaftaran->mahasiswa;
            $beasiswa = $pendaftaran->beasiswa;

            if ($mahasiswa && $beasiswa) {
                if ($mahasiswa->ipk >= $beasiswa->ipk_min) {
                    $pendaftaran->status = 'Pending';
                } else {
                    $pendaftaran->status = 'Ditolak';
                }
            }
        });
    }
}

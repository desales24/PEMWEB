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
    protected static function booted()
    {
        static::creating(function ($pendaftaran) {
            $mahasiswa = $pendaftaran->mahasiswa;
            $kriterias = Kriteria::where('beasiswa_id', $pendaftaran->beasiswa_id)->get();

            foreach ($kriterias as $kriteria) {
                $field = $kriteria->nama_kriteria;
                $value = $mahasiswa->$field;

                if ($kriteria->nilai_minimal !== null && $value < $kriteria->nilai_minimal) {
                    $pendaftaran->status = 'ditolak';
                    $pendaftaran->keterangan = "Nilai $field kurang dari batas minimal {$kriteria->nilai_minimal}";
                    return;
                }
                if ($kriteria->nilai_maksimal !== null && $value > $kriteria->nilai_maksimal) {
                    $pendaftaran->status = 'ditolak';
                    $pendaftaran->keterangan = "Nilai $field melebihi batas maksimal {$kriteria->nilai_maksimal}";
                    return;
                }
            }

            $pendaftaran->status = 'pending';
        });
    }

}

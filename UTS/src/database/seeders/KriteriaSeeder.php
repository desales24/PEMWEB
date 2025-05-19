<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kriteria;

class KriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if(Kriteria::count() == 0) {
            Kriteria::create([
                'beasiswa_id' => 1,
                'nama_kriteria' => 'ipk',
                'tipe' => 'angka',
                'nilai_minimal' => 3.0,
            ]);

            Kriteria::create([
                'beasiswa_id' => 1,
                'nama_kriteria' => 'semester',
                'tipe' => 'angka',
                'nilai_minimal' => 4,
            ]);

            Kriteria::create([
                'beasiswa_id' => 1,
                'nama_kriteria' => 'penghasilan_orangtua',
                'tipe' => 'angka',
                'nilai_maksimal' => 5000000,
            ]);
        }
    }
}

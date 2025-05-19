<?php

namespace Database\Seeders;

use App\Models\Beasiswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BeasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $beasiswa = Beasiswa::first();
        if(Beasiswa::count()==0){
            Beasiswa::create([
                'nama' => 'Beasiswa',
                'deskripsi' => 'Beasiswa untuk mahasiswa berprestasi',
                'tanggal_mulai' => '2025-01-01',
                'tanggal_selesai' => '2025-12-31',
            ]);
        } 
    }
}

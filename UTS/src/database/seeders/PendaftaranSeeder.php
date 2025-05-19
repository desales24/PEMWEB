<?php

namespace Database\Seeders;

use App\Models\Pendaftaran;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PendaftaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if(Pendaftaran::count()==0){
            Pendaftaran::create([
                'mahasiswa_id' => 1,
                'beasiswa_id' => 1,
                'tanggal_daftar' => now(),
                'status' => 'pending',
                'keterangan' => 'Pendaftaran pertama',
            ]);
        }
    }
}

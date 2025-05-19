<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if(Mahasiswa::count()==0){
            Mahasiswa::create([
                'nama' => 'John Doe',
                'nim' => '1234567890',
                'email' => 'desales@gmail.com',
                'ipk' => 3.5,
                'semester' => 5,
                'penghasilan_orangtua' => 5000000,
                'jurusan' => 'Teknik Informatika',
            ]);
        }
    }
}

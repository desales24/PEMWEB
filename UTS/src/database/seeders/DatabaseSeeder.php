<?php

namespace Database\Seeders;

use App\Models\Beasiswa;
use App\Models\Pendaftaran;
use App\Models\User;
use App\Models\Role;
use Illuminate\Database\Seeder;
use Database\Seeders\RoleSeeder;


class DatabaseSeeder extends Seeder
{
    public function run(): void
    {   
        // Additional seeders
        $this->call([RoleSeeder::class]);
        $this->call([BeasiswaSeeder::class]);
        $this->call([MahasiswaSeeder::class]);
        $this->call([PendaftaranSeeder::class]);
        $this->call([RolePermissionSeeder::class]);
    }

    private function seedUsers(): void
    {
        // Create Admin user if not exists
        $adminEmail = 'admin@admin.com';
        if (! User::where('email', $adminEmail)->exists()) {
            $admin = User::create([
                'name' => 'Admin',
                'email' => $adminEmail,
                'password' => bcrypt('password'),
            ]);
            $admin->assignRole('super_admin');
        }

        // Create Mahasiswa user if not exists
        $mhsEmail = 'mhs@admin.com';
        if (! User::where('email', $mhsEmail)->exists()) {
            $mahasiswa = User::create([
                'name' => 'Mahasiswa',
                'email' => $mhsEmail,
                'password' => bcrypt('password'),
            ]);
            $mahasiswa->assignRole('Mahasiswa');
        }
    }
}
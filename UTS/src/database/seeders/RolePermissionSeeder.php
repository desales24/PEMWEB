<?php

namespace Database\Seeders;

use App\Models\Pasien;
use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        if (User::count() == 0) {
            // Ensure roles exist
            Role::firstOrCreate(['name' => 'super_admin']);
            Role::firstOrCreate(['name' => 'Mahasiswa']);

            $superAdmin = User::factory()->create([
                'name' => 'Super Admin',
                'email' => 'admin@admin.com',
                'password' => bcrypt('password'),
            ]);
            $superAdmin->assignRole('super_admin');

            $mahasiswa = \App\Models\User::factory()->create([
                'name' => 'Mahasiswa',
                'email' => 'mhs@admin.com',
                'password' => bcrypt('password'),
            ]);
            $mahasiswa->assignRole('Mahasiswa');
        }
    }
}
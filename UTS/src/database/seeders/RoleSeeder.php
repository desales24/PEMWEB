<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    public function run()
    {
        // Hanya permission yang berhubungan dengan view mahasiswa
        $permissions = [
            'view_mahasiswa',
            'view_any_mahasiswa',
        ];

        // Buat permission jika belum ada
        foreach ($permissions as $permission) {
            Role::firstOrCreate(['name' => $permission]);
        }

        // Buat role Mahasiswa jika belum ada
        $role = Role::firstOrCreate(['name' => 'mahasiswa']);

        // Berikan hanya permission view mahasiswa ke role Mahasiswa
        $role->syncPermissions($permissions);
    }
}
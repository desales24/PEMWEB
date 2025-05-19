<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionsSeeder extends Seeder
{
    public function run()
    {
        // Hanya permission yang berhubungan dengan view mahasiswa
        $permissions = [
            'view_mahasiswa',
            'view_any_mahasiswa',
            'view_any_beasiswa',
        ];

        // Buat permission jika belum ada
        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }

        // Buat role Mahasiswa jika belum ada
        $role = Role::firstOrCreate(['name' => 'Mahasiswa']);

        // Berikan hanya permission view mahasiswa ke role Mahasiswa
        $role->syncPermissions($permissions);
    }
}

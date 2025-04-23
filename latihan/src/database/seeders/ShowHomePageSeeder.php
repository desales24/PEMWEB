<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ShowHomePage;

class ShowHomePageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        ShowHomePage::create([
            'profile_image' => '',
            'logo_image' => '',
            'title' => 'Anjay',
            'tulisan_1' => 'Hallo Teman',
            'tulisan_2' => 'Saya adalah mahasiswa ESGUL',
            'button' => 'Gas Terus',
            'contact' => '087789333890'
        ]);
    }
}

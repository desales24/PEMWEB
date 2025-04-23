<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ShowAbout;

class ShowAboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        ShowAbout::create([
            'title' => 'Tentang Saya',
            'point' => 'Sedikit Tentang Saya',
            'description_1' => 'Saya merupakan',
            'description_2' => 'Saya merupakan',
            'description_3' => 'Saya merupakan',
            'description_4' => 'Saya merupakan',
            'logo_image' => '',
            'profile_image' => ''
        ]);
    }
}

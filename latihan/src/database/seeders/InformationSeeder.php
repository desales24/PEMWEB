<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Information;

class InformationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Information::create([
            'name' => 'Desales',
            'birthday' => '24-01-2005',
            'phone' => '087789333890',
            'email' => 'desalesbayu@gmail.com',
            'description_1' => '10',
            'description_2' => '500',
            'description_3' => '5',
            'description_4' => '10',
            'logo_1_image' => '',
            'logo_2_image' => '',
            'logo_3_image' => ''
        ]);
    }
}

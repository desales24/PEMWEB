<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        if (product::count()==0){
                Product::create([
                'name' => 'sepetu',
                'description' => 'adidas',
                'image' => '',
            ]);   
        }
   
    }
}

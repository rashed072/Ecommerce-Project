<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('products')->insert([
        [
            'name'=>'LG mobile',
            'price'=>'200',
            'description'=>'A smartphone with many features',
            'category'=>"mobile",
            'gallery'=>"https://cdn1.smartprix.com/rx-iScwgdvF6-w240-h290/lg-w30-pro.jpg"
        ],
        [
            'name'=>'OPPO mobile',
            'price'=>'300',
            'description'=>'A smartphone with many features',
            'category'=>"mobile",
            'gallery'=>"https://cdn1.smartprix.com/rx-iP3d27w7q-w1200-h1200/P3d27w7q.jpg"
        ],[
            'name'=>'Panasonic TV',
            'price'=>'500',
            'description'=>'A tv with many features',
            'category'=>"TV",
            'gallery'=>"https://brandbazaarbd.com/wp-content/uploads/2015/03/uuuu.jpg"
        ],
        [
            'name'=>'LG TV',
            'price'=>'700',
            'description'=>'A tv with many features',
            'category'=>"TV",
            'gallery'=>"http://www.mrelectronicsbd.com/wp-content/uploads/2017/08/lg-lcd-tv-lg-42cs5701409031316.jpg"
        ],
        [
            'name'=>'LG fridge',
            'price'=>'900',
            'description'=>'A frezze with many features',
            'category'=>"fridge",
            'gallery'=>"http://www.mrelectronicsbd.com/wp-content/uploads/2017/07/lg-refrigerator-gl-m302rlmc1408166673-1.jpg"
        ]
    ]);
    }
}

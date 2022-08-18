<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Weald\Test\Control\Models\BaseLineAlpha;

class BaseLineAlphaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		BaseLineAlpha::count(50)->create();
    }
}

// <?php
// 
// use Illuminate\Database\Seeder;
// 
// class BaseLineAlpha extends Seeder
// {
//     /**
//      * Run the database seeds.
//      *
//      * @return void
//      */
//     public function run()
//     {
//         BaseLineAlphafactory::count(50)->create();
//     }
// }
// 
// 

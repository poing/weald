<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\BaseLineAlphaSeeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            BaseLineAlphaSeeder::class,
        ]);        
    }
}

// <?php
//
// use Illuminate\Database\Seeder;
//
// class DatabaseSeeder extends Seeder
// {
//     /**
//      * Run the database seeds.
//      *
//      * @return void
//      */
//     public function run()
//     {
//         $this->call([
//             BaseLineAlpha::class,
//         ]);
//     }
// }

<?php

namespace Database\Seeders;

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
        BaseLineAlpha::factory()->count(50)->create();
    }
}
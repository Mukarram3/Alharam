<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class VehiclecategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vehiclecategories')->insert([
            'planId' => '1',
            'title' => 'Alto',
            'image' => '60b88ff2a47f8.png',
        ]);
        DB::table('vehiclecategories')->insert([
            'planId ' => '1',
            'title' => 'Alto',
            'image' => '60b88ff2a47f8.png',
        ]);
        DB::table('vehiclecategories')->insert([
            'planId ' => '1',
            'title' => 'Swift',
            'image' => '60b88ff2a47f8.png',
        ]);
        DB::table('vehiclecategories')->insert([
            'planId ' => '2',
            'title' => 'Jimny',
            'image' => '60b88ff2a47f8.png',
        ]);
    }
}

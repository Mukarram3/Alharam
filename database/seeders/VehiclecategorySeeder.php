<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Str;
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
            'title' => 'Bolan',
            'image' => '60c3350340a1b.jpg',
        ]);
        DB::table('vehiclecategories')->insert([
            'planId' => '1',
            'title' => 'Alto',
            'image' => '60c3355db3638.png',
        ]);
        DB::table('vehiclecategories')->insert([
            'planId' => '1',
            'title' => 'Swift',
            'image' => '60c3358a80519.jpg',
        ]);
        DB::table('vehiclecategories')->insert([
            'planId' => '1',
            'title' => 'Jimny',
            'image' => '60c335a76d432.jpg',
        ]);
    }
}

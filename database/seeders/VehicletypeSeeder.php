<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Str;
class VehicletypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vehicletypes')->insert([
            'vehicleId' => '1',
            'title' => 'Alto',
            'price' => '12',
            'image' => '60b88ff2a47f8.png',
            'description' => 'The Car for New Generation Fuel Efficient – Spacious – Modern Design',
            'engine_cap' => '660 cc',
            'seat_cap' => '4',
            'doors' => '6',
            'fuel_type' => 'Petrol',
            'transm_type' => 'Manual/ Auto Gear Shift',
            'version' => 'VX, VXR, AGS',
            'colours' => 'Cerulean Blue, Pearl Red, Graphite Gray, Silky Silver, White, Pearl Black, Sand Beige',

        ]);

    DB::table('vehicletypes')->insert([
        'vehicleId' => '1',
        'title' => 'Alto',
        'price' => '12',
        'image' => '60b88ff2a47f8.png',
        'description' => 'The Car for New Generation Fuel Efficient – Spacious – Modern Design',
        'engine_cap' => '660 cc',
        'seat_cap' => '4',
        'doors' => '6',
        'fuel_type' => 'Petrol',
        'transm_type' => 'Manual/ Auto Gear Shift',
        'version' => 'VX, VXR, AGS',
        'colours' => 'Cerulean Blue, Pearl Red, Graphite Gray, Silky Silver, White, Pearl Black, Sand Beige',

    ]);

DB::table('vehicletypes')->insert([
    'vehicleId' => '2',
    'title' => 'Alto',
    'price' => '12',
    'image' => '60b88ff2a47f8.png',
    'description' => 'The Car for New Generation Fuel Efficient – Spacious – Modern Design',
    'engine_cap' => '660 cc',
    'seat_cap' => '4',
    'doors' => '6',
    'fuel_type' => 'Petrol',
    'transm_type' => 'Manual/ Auto Gear Shift',
    'version' => 'VX, VXR, AGS',
    'colours' => 'Cerulean Blue, Pearl Red, Graphite Gray, Silky Silver, White, Pearl Black, Sand Beige',

]);


DB::table('vehicletypes')->insert([
    'vehicleId' => '3',
    'title' => 'Alto',
    'price' => '12',
    'image' => '60b88ff2a47f8.png',
    'description' => 'The Car for New Generation Fuel Efficient – Spacious – Modern Design',
    'engine_cap' => '660 cc',
    'seat_cap' => '4',
    'doors' => '6',
    'fuel_type' => 'Petrol',
    'transm_type' => 'Manual/ Auto Gear Shift',
    'version' => 'VX, VXR, AGS',
    'colours' => 'Cerulean Blue, Pearl Red, Graphite Gray, Silky Silver, White, Pearl Black, Sand Beige',
]);


}

}

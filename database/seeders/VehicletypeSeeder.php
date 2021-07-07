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
            'title' => 'Bolan',
            'price' => '11',
            'image' => '60c3360d8d8b1.jpg',
            'description' => 'With upgraded features and advanced Euro-II technology, now your Suzuki Bolan is more environment friendly. Now drive the extra mile, with high standard engine performance in low fuel consumption and inexpensive maintenance that let your savings augment in an economical way!',
            'engine_cap' => '796 cc',
            'seat_cap' => '5',
            'doors' => '5',
            'fuel_type' => 'Petrol',
            'transm_type' => 'Manual',
            'version' => 'VX',
            'colours' => 'Pearl Red, Silky Silver, White',

        ]);

    DB::table('vehicletypes')->insert([
        'vehicleId' => '1',
        'title' => 'Bolan',
        'price' => '11',
        'image' => '60c336aa4efe4.jpg',
        'description' => 'With upgraded features and advanced Euro-II technology, now your Suzuki Bolan is more environment friendly. Now drive the extra mile, with high standard engine performance in low fuel consumption and inexpensive maintenance that let your savings augment in an economical way!',
        'engine_cap' => '796 cc',
        'seat_cap' => '5',
        'doors' => '5',
        'fuel_type' => 'Petrol',
        'transm_type' => 'Manual',
        'version' => 'VX',
        'colours' => 'Pearl Red, Silky Silver, White',

    ]);

    DB::table('vehicletypes')->insert([
        'vehicleId' => '1',
        'title' => 'Bolan',
        'price' => '11',
        'image' => '60c336f05437d.jpg',
        'description' => 'With upgraded features and advanced Euro-II technology, now your Suzuki Bolan is more environment friendly. Now drive the extra mile, with high standard engine performance in low fuel consumption and inexpensive maintenance that let your savings augment in an economical way!',
        'engine_cap' => '796 cc',
        'seat_cap' => '5',
        'doors' => '5',
        'fuel_type' => 'Petrol',
        'transm_type' => 'Manual',
        'version' => 'VX',
        'colours' => 'Pearl Red, Silky Silver, White',

    ]);


DB::table('vehicletypes')->insert([
    'vehicleId' => '2',
    'title' => 'Alto',
    'price' => '12',
    'image' => '60c3377f423ea.jpg',
    'description' => 'The Car for New Generation Fuel Efficient – Spacious – Modern Design',
    'engine_cap' => '660 cc',
    'seat_cap' => '4',
    'doors' => '5',
    'fuel_type' => 'Petrol',
    'transm_type' => 'Manual/ Auto Gear Shift',
    'version' => 'VX, VXR, AGS',
    'colours' => 'Cerulean Blue, Pearl Red, Graphite Gray, Silky Silver, White, Pearl Black, Sand Beige',
]);

DB::table('vehicletypes')->insert([
    'vehicleId' => '2',
    'title' => 'Alto',
    'price' => '12',
    'image' => '60c337d4ea816.png',
    'description' => 'The Car for New Generation Fuel Efficient – Spacious – Modern Design',
    'engine_cap' => '660 cc',
    'seat_cap' => '4',
    'doors' => '5',
    'fuel_type' => 'Petrol',
    'transm_type' => 'Manual/ Auto Gear Shift',
    'version' => 'VX, VXR, AGS',
    'colours' => 'Cerulean Blue, Pearl Red, Graphite Gray, Silky Silver, White, Pearl Black, Sand Beige',
]);

DB::table('vehicletypes')->insert([
    'vehicleId' => '3',
    'title' => 'Swift',
    'price' => '12',
    'image' => '60c33830777ca.jpg',
    'description' => 'An eye–catching and dynamic sense of style has always set Swift apart from other compact cars. Swift gives you more of everything without compromising on style or performance. Swift is a young, fun and dynamic car for fun-loving people. With Swift you’ll be loving the drive and loving your life more than you ever thought possible.',
    'engine_cap' => '1328 cc',
    'seat_cap' => '5',
    'doors' => '5',
    'fuel_type' => 'Petrol',
    'transm_type' => 'Manual/Automatic',
    'version' => 'DLX Navigation, Automatic Navigation',
    'colours' => 'Pearl Red, Graphite Gray, Silky Silver, White, Pearl Black, Sand Beige',
]);

DB::table('vehicletypes')->insert([
    'vehicleId' => '4',
    'title' => 'Jimmy',
    'price' => '54',
    'image' => '60c338bd11e47.jpg',
    'description' => 'Nothing but daring',
    'engine_cap' => '1500 cc',
    'seat_cap' => '4',
    'doors' => '3',
    'fuel_type' => 'Petrol',
    'transm_type' => 'Manual ()4WD',
    'version' => 'GA',
    'colours' => 'White, Metallic Silky Silver, Kinetic Yellow, Jungle Green, Pearl Bluish Black',
]);

}

}

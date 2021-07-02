<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Str;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Mukarram',
            'email' => 'mukarram123786@gmail.com',
            'password' => Hash::make('m12345'),
            'address' => 'street 8',
            'city' => 'sargodha',
            'mobile' => '03066703820',
            'image' => '60b5d6f5ee0b6.png',

        ]);
    }
}

<?php

namespace Database\Seeders;
use illuminate\Support\Facades\DB;
use illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vehicletypes')->insert([
            'name ' => 'Mukarram',
            'email' => 'mukarram123786@gmail.com',
            'password' => Hash::make('m12345'),
            'address' => 'street 8',
            'city' => 'sargodha',
            'mobile' => '03066703820',
            'image' => '60b5d6f5ee0b6.png',
            
        ]);
    }
}

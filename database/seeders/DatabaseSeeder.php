<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Str;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
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
            'image' => '60b2146c3ca6a.png',
        ]);

        $this->call([
            // UserSeeder::class,
            PlanSeeder::class,
            VehiclecategorySeeder::class,
            VehicletypeSeeder::class,
            FinanceSeeder::class,
            financesubmitSeeder::class,

        ]);


    }
}

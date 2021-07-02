<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('plans')->insert([
            'title' => 'Select Your Suzuki',
            'image' => '60b5d6f5ee0b6.png',
            'description' => ('Let us know which type of financing you want'),
            'btn_name' => 'Select Suzuki',
        ]);
        DB::table('plans')->insert([
            'title' => 'Mode of Finance',
            'image' => '60b5d6f5ee0b6.png',
            'description' => ('Let us know which type of financing you want'),
            'btn_name' => 'Select Mode Of Finance',
        ]);
    }
}

<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Str;
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
            'image' => '60c39f4fe8395.png',
            'description' => ('Just select your desired Suzuki vehicle which you want to finance from our wide range of latest contemporary model'),
            'btn_name' => 'Select Suzuki',
        ]);
        DB::table('plans')->insert([
            'title' => 'Mode of Finance',
            'image' => '60c3338caaa9f.png',
            'description' => ('Let us know which type of financing you want'),
            'btn_name' => 'Select Mode Of Finance',
        ]);
    }
}

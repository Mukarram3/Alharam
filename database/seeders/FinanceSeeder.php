<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use illuminate\Support\Facades\DB;
class FinanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('finances')->insert([
            'planid ' => '1',
            'title' => 'Swift',
            'description' => 'Get the car of your choice interest-free way. With simple, convenient and flexible solutions that are Shari’ah compliant along with the following benefits',
            'tenure_year' => '2',
            'total_amount' => '400',
            'installments' => '3',
            'instal_duration' => '50',
        ]);
        DB::table('finances')->insert([
            'planid ' => '2',
            'title' => 'Conventional',
            'description' => 'Be in the driver’s seat when buying the perfect car of your choice. Suzuki Finance Arrangement program lets you control your payment plan. With our quick loan processing, the only thing that’ll take time is deciding what product and which color to pick',
            'tenure_year' => '2',
            'total_amount' => '400',
            'installments' => '3',
            'instal_duration' => '50',
        ]);
        DB::table('finances')->insert([
            'planid ' => '2',
            'title' => 'Car Ijarah',
            'description' => 'Get the car of your choice interest-free way. With simple, convenient and flexible solutions that are Shari’ah compliant along with the following benefits',
            'tenure_year' => '2',
            'total_amount' => '400',
            'installments' => '3',
            'instal_duration' => '50',
        ]);
    }
}

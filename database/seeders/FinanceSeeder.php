<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Str;
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
            'planid' => '2',
            'title' => 'Car Ijarah',
            'description' => 'Get the car of your choice interest-free way. With simple, convenient and flexible solutions that are Shari’ah compliant along with the following benefits',
            'tenure_year' => '2',
            'total_amount' => '400',
            'installments' => '3',
            'instal_duration' => '50',
        ]);
        DB::table('finances')->insert([
            'planid' => '2',
            'title' => 'Conventional',
            'description' => 'Be in the driver’s seat when buying the perfect car of your choice. Suzuki Finance Arrangement program lets you control your payment plan. With our quick loan processing, the only thing that’ll take time is deciding what product and which color to pick',
            'tenure_year' => '2',
            'total_amount' => '400',
            'installments' => '3',
            'instal_duration' => '50',
        ]);
        DB::table('finances')->insert([
            'planid' => '2',
            'title' => 'Deferred Insurance and Registration',
            'description' => 'If you are short on cash, lower your down payment with the Deferred Plan option and pay the registration and insurance fee in monthly installments. Hence lowest possible down payment will increase your affordability and facilitate you in owning a high value vehicle.	',
            'tenure_year' => '2',
            'total_amount' => '400',
            'installments' => '3',
            'instal_duration' => '50',
        ]);
        DB::table('finances')->insert([
            'planid' => '2',
            'title' => 'Residual Value Financing',
            'description' => 'Under RV Financing, Suzuki Finance provides convenience to its customers to pay a lump sum balloon payment (up to 50% of total Financed amount) at the end of the financing tenure for increased affordability and convenience of repayments. Available for the residents of Islamabad, Rawalpindi (including peripheries Wah, kamra, Taxila), Jhelum, Peshawar, Sargodha, Abbotabad, Lahore, Kasur, Sheikhupura, Gujranwala, Gujrat, Sialkot, Multan, Faisalabad, Bahawalpur, Rahim Yar Khan, Sahiwal, Okara, Karachi, Sukkur, Hyderabad and Quetta only.',
            'tenure_year' => '2',
            'total_amount' => '400',
            'installments' => '3',
            'instal_duration' => '50',
        ]);
    }
}

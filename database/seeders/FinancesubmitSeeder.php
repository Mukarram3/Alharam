<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Str;
class FinancesubmitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('financesubmits')->insert([
            'financeid' => '1',
            'mobile' => '12345678910',
            'notes' => 'jhbjhdsb asbjkshsa  assdushghd ssgda',
            'username' => 'mukarram',
        ]);
        DB::table('financesubmits')->insert([
            'financeid' => '1',
            'mobile' => '12345678910',
            'notes' => 'jhbjhdsb asbjkshsa  assdushghd ssgda',
            'username' => 'ali',
        ]);
        DB::table('financesubmits')->insert([
            'financeid' => '2',
            'mobile' => '12345678910',
            'notes' => 'jhbjhdsb asbjkshsa  assdushghd ssgda',
            'username' => 'danish',
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class SellerQuotesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { {
            $data = array(


                array('code' => 'AFK', 'region' => 'AFK Kota', 'symbol' => '؋', 'quota_price' => '5000'),
                array('code' => 'AS', 'region' => 'AS Kota', 'symbol' => '$', 'quota_price' => '4000'),
                array('code' => 'EU', 'region' => 'EU Kota', 'symbol' => '€', 'quota_price' => '5000'),
                array('code' => 'TR', 'region' => 'TR Kota', 'symbol' => 'TL', 'quota_price' => '3000'),
                array('code' => 'US', 'region' => 'US Kota', 'symbol' => '$', 'quota_price' => '5000'),
              //  array('code' => 'OTD', 'region' => ' OTD Kota', 'symbol' => '$', 'quota_price' => '5000'),






            );
            DB::table('seller_quotes')->insert($data);
        }
    }
}
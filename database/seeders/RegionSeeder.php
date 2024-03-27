<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        DB::table('regions')->delete();
        $regions = array(

          //  array('bolge' => 'TR'),
          //  array('bolge' => 'EU'),
          //  array('bolge' => 'US'),
           // array('bolge' => 'AS'),
           // array('bolge' => 'AFK'),
            array('code' => 'AFK','bolge' => 'AFK', 'region' => 'AFK Kota', 'symbol' => '؋', 'quota_price' => '5000'),
            array('code' => 'AS', 'bolge' => 'AS','region' => 'AS Kota', 'symbol' => '$', 'quota_price' => '4000'),
            array('code' => 'EU', 'bolge' => 'EU','region' => 'EU Kota', 'symbol' => '€', 'quota_price' => '5000'),
            array('code' => 'TR', 'bolge' => 'TR','region' => 'TR Kota', 'symbol' => 'TL', 'quota_price' => '3000'),
            array('code' => 'US', 'bolge' => 'US','region' => 'US Kota', 'symbol' => '$', 'quota_price' => '5000'),
            //  array('bolge' => 'TR'),
        );
        DB::table('regions')->insert($regions);
    }


}
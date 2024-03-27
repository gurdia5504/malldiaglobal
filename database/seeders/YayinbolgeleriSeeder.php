<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class YayinbolgeleriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('yayinbolgeleris')->delete();
        $yayinbolgeleris= array(

            array( 'bolge' => 'TR'),
            array('bolge' => 'EU'),
            array('bolge' => 'US'),
            array('bolge' => 'AS'),
            array('bolge' => 'AFK'),
          //  array('bolge' => 'TR'),
        );
        DB::table('yayinbolgeleris')->insert($yayinbolgeleris);

    }
}
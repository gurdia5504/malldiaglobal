<?php

namespace Database\Seeders;

use App\Models\CompanyType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanyTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = [
            'Incorporated company',
            'Limited company',
            'Limited Company',
            'Unlimited company',
            'Ordinary Limited Company',
            'Ordinary Company',
            'Cooperative Company'
        ];
        DB::table('countries')->delete();
        foreach ($types as $type) {
            CompanyType::create([
                'name' => $type,
            ]);
        }
    }
}

<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\WalletCostsheet>
 */
class WalletCostsheetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [

            'code' => $this->faker->numberBetween(1000000, 9999999),
            'period_status' => true,
              'date_order' =>  $this->faker->dateTime($max = 'now', $timezone = null),
            'car_period' =>  $this->faker->dateTime($max = 'now', $timezone = null),

              'country' => $this->faker->country,
              'region' => $this->faker->sentence(1),

            //  $table->string('Vendor')->nullable();
            //   $table->string('seller_name_last_name')->nullable();
              'doviz_cinsi'=> mt_rand(100, 1000) / 10.0,
            // $table->string('total_sales_price')->nullable();
            'product_name' => $this->faker->sentence(1),

             'product_name' => $this->faker->sentence(1),
             'product_sku' => $this->faker->numberBetween(1000000000, 9000000000),
             'product_bare_code_type'  => $this->faker->sentence(1),
                'product_bare_code' =>  $this->faker->numberBetween(100000000, 900000000),

             'product_cost' => mt_rand(100, 1000) / 10.0,
              'product_cost_tax_rate' =>  mt_rand(100, 1000) / 10.0,
              'product_cost_tax'=> mt_rand(100, 1000) / 10.0,
            'product_saller_price' => mt_rand(500, 1100) / 10.0,
            //  $table->string('product_cost_+_tax')->nullable();
              'cargo_fee'   => mt_rand(100, 700) / 10.0,
               'cargo_vergi_orani' =>  mt_rand(100, 500) / 10.0,
              'cargo_tax'=> mt_rand(10, 15) / 10.0,
            // $table->string('cargo_fee_+_tax')->nullable();
            //   $table->string('product_karari_+_tax')->nullable();
              'product_tax'  => mt_rand(18, 19) / 10.,
            //  $table->string('net_satis_kari')->nullable();
             'transfert_tax_rate'   => mt_rand(100, 1000) / 10.0,
            'transfert_fee'=> mt_rand(100, 1000) / 10.0,
              'company_pay'   => mt_rand(100, 1000) / 10.0,
              'company_odenen'=> mt_rand(100, 1000) / 10.0,
            'pool_pay'=> mt_rand(100, 1000) / 10.0,

          //   'pool_ordenen'  => $this->faker->sentence(1),

             'wallet_seller_kari'=> mt_rand(100, 1000) / 10.0,
             'wallet_seller_pay'=> mt_rand(100, 1000) / 10.0,
                'return_status'  =>true,
             'user_id' => User::all()->random()->id,
        ];

   }
}
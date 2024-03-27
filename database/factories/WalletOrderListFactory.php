<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\WalletOrderList>
 */
class WalletOrderListFactory extends Factory
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
            'date_order' =>
            $this->faker->dateTime($max = 'now', $timezone = null),
            'product_name' => $this->faker->sentence(1),

            // 'product_name' => $this->faker->sentence(1),
            'product_sku' => $this->faker->numberBetween(1000000000, 9000000000),
            'produt_barecode_type'  => $this->faker->sentence(1),
            'product_barecode' =>  $this->faker->numberBetween(100000000, 900000000),
            'pool_kazanci'  => $this->faker->sentence(1),

          //  'phone' => $this->faker->numberBetween(1000000000, 9000000000),
            'country' => $this->faker->country,
            'region' => $this->faker->sentence(1),
            'seller_winner' => $this->faker->sentence(1),
            'order_status' => true,
            //'image_path' => fake()->imageUrl($width = 400, $height = 400)
            'user_id' => User::all()->random()->id,
         //   'code' => $this->faker->numberBetween(1000000000, 9000000000),

        ];
    }
}
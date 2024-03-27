<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SellerQuotes>
 */
class SellerQuotesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //  'user_id' => User::all()->random()->id,
            'Region'   => $this->faker->randomElement(['TR Kota', 'US Kota', 'EU Kota', 'AS Kota', 'AFK Kota','OTD Kota']),
            'currency'   => $this->faker->randomElement(['TR', 'US', 'EU', 'AS', 'AFK']),
            'quota_price'   => $this->faker->randomElement(['3000',  '4000', '5000']),
        ];
    }
}
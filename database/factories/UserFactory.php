<?php

namespace Database\Factories;

use App\Models\Currency;
use App\Models\Dovizler;
use App\Models\Region;
use App\Models\SellerQuotes;
use App\Models\Yayinbolgeleri;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
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
            'last_name' => fake()->name(),
            'first_name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'address' => $this->faker->streetAddress,
            'iban' =>  $this->faker->iban,
            'bank_name'  => $this->faker->sentence(1),
            'status' => true,
            'phone' => $this->faker->numberBetween(00000000, 9000000000),
            'tc_vkn' => $this->faker->numberBetween(1000000, 9000000),
            'country' => $this->faker->country,
           // 'region' => $this->faker->sentence(1),
            'city' => $this->faker->city,
            //'image_path' => fake()->imageUrl($width = 400, $height = 400)
            'image_path' => strval(mt_rand(1, 5)) . '.jpg',
            // 'currency'   => $this->faker->randomElement(['TR', 'US', 'EU', 'AS', 'AFK', 'OTD']),
            'dovizler_id' => Dovizler::all()->random()->id,
            'bolge_id' => Yayinbolgeleri::all()->random()->id,
            'region_id' => Region::all()->random()->id,
            'seller_quotes_id' =>  SellerQuotes::all()->random()->id,
            'registration_type'   => $this->faker->randomElement(['INDIVIDUAL', 'CORPORATE']),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
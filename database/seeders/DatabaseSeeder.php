<?php

namespace Database\Seeders;
use App\Models\{Il, SellerQuotes, Ulke, User, WalletCostsheet, WalletOrderList};
use App\Models\Wallet_Sales_Cost_Statement;
use CitiesTableSeeder;
use CountriesTableSeeder;
use Illuminate\Support\Facades\DB;


use Illuminate\Database\Seeder;
use StatesTableSeeder;

class DatabaseSeeder extends Seeder
{

    public function run()
    {



        $this->call(RegionSeeder::class);
       $this->call(CountrySeeder::class);
        $this->call(StateSeeder::class);
        $this->call(CitySeeder::class);
        $this->call(CurrencySeeder::class);
        $this->call(SellerQuotesSeeder::class);
        $this->call(DovizlerSeeder::class);
        $this->call(YayinbolgeleriSeeder::class);
        $this->call(UlkeSeeder::class);
        $this->call(IlSeeder::class);




        // Users
        User::withoutEvents(function () {
            // Create 1 admin
            User::factory(1)->create([
                'last_name' => 'Admin',

                'email' => 'admin@gmail.com',
                'password' => bcrypt('123456789'),
                'role' => 'admin',
            ]);

            User::factory(1)->create([
                'last_name' => 'Thomas',

                'email' => 'thomastuemo@gmail.com',
                'password' => bcrypt('123456789'),
                'role' => 'admin',
            ]);

            User::factory(1)->create([
                'last_name' => 'Tuemo',

                'email' => 'thomastuemo@yahoo.fr',
                'password' => bcrypt('123456789'),
                'role' => 'admin',
            ]);

            User::factory(1)->create([
                'last_name' => 'Thomas',

                'email' => 'tuemothomas@gmail.com',
                'password' => bcrypt('123456789'),
                'role' => 'admin',
            ]);
            // Create 2 managers
            User::factory()->count(3)->create([
                'role' => 'manager',
            ]);
            // Create 3 users
            User::factory()->count(5)->create();
        });


        // Create 20 orders
        WalletOrderList::factory()->count(20)->create();

        // Create 20 orders
       // Wallet_Sales_Cost_Statement::factory()->count(10)->create();
        WalletCostsheet::factory()->count(20)->create();

     //   SellerQuotes::factory()->count(6)->create();



       // $this->call(CountriesTableSeeder::class);
    //   $this->call(StatesTableSeeder::class);
   //    $this->call(CitiesTableSeeder::class);

      //  $this->call(CountriesTableSeeder::class);






        DB::table('categories')->insert([
            [
                'title' => 'Fashion',
                'slug' => 'Fashion'
            ],
            [
                'title' => 'Shoe',
                'slug' => 'Shoe'
            ],

            [
                'title' => 'And Textile',
                'slug' => 'And Textile'
            ],
            [
                'title' => 'Accessory',
                'slug' => 'Accessory'
            ],
            [
                'title' => 'Home-Garden',
                'slug' => 'Home-Garden'
            ],

            [
                'title' => 'Sport',
                'slug' => 'sport'
            ],
            [
                'title' => 'Electonic',
                'slug' => 'Electronic'
            ],
            [
                'title' => 'Cosmetic',
                'slug' => 'cosmetic'
            ],
            [
                'title' => 'Hobby-Toy',
                'slug' => 'hobby-toy'
            ],
            [
                'title' => 'Mother-Baby',
                'slug' => 'Mother-Baby'
            ],
            [
                'title' => 'Supermarket',
                'slug' => 'Supermarket'
            ],

            [
                'title' => 'Book',
                'slug' => 'book'
            ],
            [
                'title' => 'Petshop',
                'slug' => 'Petshop'
            ],


            [
                'title' => 'Construction market',
                'slug' => 'Construction market'
            ],
            [
                'title' => 'Office-Stationery',
                'slug' => 'Office-Stationery'
            ],

            [
                'title' => 'Automobile-Motorcycle',
                'slug' => 'Automobile-Motorcycle'
            ],
            [
                'title' => 'Movie-Music-Entertainment',
                'slug' => 'Movie-Music-Entertainment'
            ],

            [
                'title' => 'Holiday',
                'slug' => 'Holiday'
            ],

        ]);



   }
}
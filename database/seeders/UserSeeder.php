<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'last_name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => '123456789',
                'role' => 'admin',
            ],
            [
                'last_name' => 'Thomas',
                'email' => 'thomastuemo@gmail.com',
                'password' => '123456789',
                'role' => 'admin',
            ],
            [
                'last_name' => 'Tuemo',
                'email' => 'thomastuemo@yahoo.fr',
                'password' => '123456789',
                'role' => 'admin',
            ],
            [
                'last_name' => 'Thomas',
                'email' => 'tuemothomas@gmail.com',
                'password' => '123456789',
                'role' => 'admin',
            ],
            [
                'last_name' => 'DEMO',
                'email' => 'user@example.com',
                'password' => '123456789',
                'role' => 'admin',
            ]
        ];

        foreach ($data as $user) {
            $user['password'] = bcrypt($user['password']);
            $user['status'] = 1;
            User::create($user);
        }

        User::factory(3)->create([
            'role' => 'manager',
        ]);

        User::factory(5)->create();
    }
}

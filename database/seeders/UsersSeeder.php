<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $credential = [
            [
                'email' => 'admin@gmail.com',
                'password' => bcrypt('password'),
                'name' => 'admin'
            ],

        ];

        foreach ($credential as $user) {
            User::create($user);
        }
    }
};

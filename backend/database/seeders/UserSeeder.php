<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create 3 users
        User::factory()->createMany([
            [
                'name' => 'PlayerOne',
                'email' => 'player1@example.com',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'PlayerTwo',
                'email' => 'player2@example.com',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'PlayerThree',
                'email' => 'player3@example.com',
                'password' => Hash::make('password'),
            ],
        ]);

    }
}

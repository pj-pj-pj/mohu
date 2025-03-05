<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Armor;

class ArmorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $armors = [
            ['name' => 'Yukumo Set', 'def' => 5],
            ['name' => 'Jaggi Armor Set', 'def' => 10]
        ];

        foreach ($armors as $armor) {
            Armor::create($armor);
        }
    }
}

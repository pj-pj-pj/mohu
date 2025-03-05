<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Weapon;

class WeaponSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $weapons = [
            [
                'name' => 'Old Yukumo Dual',
                'type' => 'Dual Swords',
                'atk' => 100,
                'spd' => 20,
                'def' => 0,
                'sharpness' => 20,
                'description' => 'A pair of well-worn twin blades.'
            ],
            [
                'name' => 'Jaggi Claws',
                'type' => 'Dual Swords',
                'atk' => 120,
                'spd' => 15,
                'def' => 5,
                'sharpness' => 25,
                'description' => 'Fangs and claws repurposed as deadly weapons.'
            ]
        ];

        foreach ($weapons as $weapon) {
            Weapon::create($weapon);
        }
    }
}

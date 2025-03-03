<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MonsterClass;

class MonsterClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $classes = [
            [
                'name' => 'Bird Wyvern',
                'skills' => json_encode([
                    ['name' => 'Peck', 'power' => 30, 'accuracy' => 90],
                    ['name' => 'Wing Flap', 'power' => 20, 'accuracy' => 100],
                    ['name' => 'Sonic Call', 'power' => 0, 'accuracy' => 60, 'effect' => 'Stuns player for 1 turn']
                ]),
                'base_health' => 120, 'base_stamina' => 150, 'base_attack' => 45, 'base_defense' => 40, 'base_speed' => 60
            ],
            [
                'name' => 'Fanged Beast',
                'skills' => json_encode([
                    ['name' => 'Claw Swipe', 'power' => 35, 'accuracy' => 80],
                    ['name' => 'Body Slam', 'power' => 50, 'accuracy' => 75],
                    ['name' => 'Feral Roar', 'power' => 0, 'effect' => 'Boosts attack for 2 turns']
                ]),
                'base_health' => 140, 'base_stamina' => 180, 'base_attack' => 50, 'base_defense' => 50, 'base_speed' => 40
            ],
            [
                'name' => 'Leviathan',
                'skills' => json_encode([
                    ['name' => 'Tail Whip', 'power' => 40, 'accuracy' => 90],
                    ['name' => 'Water Jet', 'power' => 45, 'accuracy' => 60],
                    ['name' => 'Slippery Escape', 'power' => 0, 'effect' => 'Raises evasion for 1 turn']
                ]),
                'base_health' => 160, 'base_stamina' => 200, 'base_attack' => 55, 'base_defense' => 60, 'base_speed' => 35
            ]
        ];        

        foreach ($classes as $class) {
            MonsterClass::create($class);
        }
    }
}

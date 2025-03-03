<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Monster;
use App\Models\MonsterClass;

class MonsterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $birdWyvern = MonsterClass::where('name', 'Bird Wyvern')->first()->id;
        $fangedBeast = MonsterClass::where('name', 'Fanged Beast')->first()->id;
        $leviathan = MonsterClass::where('name', 'Leviathan')->first()->id;

        $monsters = [
            [
                'name' => 'Jaggi', 'monster_class_id' => $birdWyvern, 'element' => 'None', 'special_skills' => json_encode(['Pack Call'])
            ],
            [
                'name' => 'Arzuros', 'monster_class_id' => $fangedBeast, 'element' => 'None', 'special_skills' => json_encode(['Armor Up'])
            ],
            [
                'name' => 'Bulldrome', 'monster_class_id' => $fangedBeast, 'element' => 'None', 'special_skills' => json_encode(['Charge Attack'])
            ],
            [
                'name' => 'Qurupeco', 'monster_class_id' => $birdWyvern, 'element' => 'Fire', 'special_skills' => json_encode(['Mimic Call'])
            ],
            [
                'name' => 'Royal Ludroth', 'monster_class_id' => $leviathan, 'element' => 'Water', 'special_skills' => json_encode(['Regeneration'])
            ],
            [
                'name' => 'Lagombi', 'monster_class_id' => $fangedBeast, 'element' => 'Ice', 'special_skills' => json_encode(['Ice Dash'])
                ]
        ];

        foreach ($monsters as $monster) {
            Monster::create($monster);
        }
    }
}

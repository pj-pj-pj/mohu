<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\WeaponSkill;
use App\Models\Weapon;

class WeaponSkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $weapons = Weapon::all();

        $weaponSkills = [
            'Old Yukumo Dual' => [
                ['name' => 'Demon Flurry', 'power' => 30, 'stamina_cost' => 10],
                ['name' => 'Blade Dance', 'power' => 50, 'stamina_cost' => 20]
            ],
            'Jaggi Claws' => [
                ['name' => 'Savage Slash', 'power' => 35, 'stamina_cost' => 15],
                ['name' => 'Jaggi Frenzy', 'power' => 45, 'stamina_cost' => 25]
            ]
        ];

        foreach ($weapons as $weapon) {
            if (isset($weaponSkills[$weapon->name])) {
                foreach ($weaponSkills[$weapon->name] as $skill) {
                    WeaponSkill::create(array_merge($skill, ['weapon_id' => $weapon->id]));
                }
            }
        }
    }
}

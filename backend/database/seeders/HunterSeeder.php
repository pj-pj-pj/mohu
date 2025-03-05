<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Hunter;
use App\Models\User;
use App\Models\Weapon;
use App\Models\Armor;

class HunterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run():void
    {
        $users = User::all();

        // Fetch weapons and armor
        $weapon1 = Weapon::where('name', 'Old Yukumo Dual')->first();
        $weapon2 = Weapon::where('name', 'Jaggi Claws')->first();
        $armor1 = Armor::where('name', 'Yukumo Set')->first();
        $armor2 = Armor::where('name', 'Jaggi Armor Set')->first();

        // Assign hunters to users
        $hunters = [
            ['name' => 'HunterA', 'sex' => 'Male', 'character_slot' => 1, 'weapon_id' => $weapon1->id, 'armor_id' => $armor1->id],
            ['name' => 'HunterB', 'sex' => 'Female', 'character_slot' => 2, 'weapon_id' => $weapon2->id, 'armor_id' => $armor2->id],

            ['name' => 'HunterC', 'sex' => 'Male', 'character_slot' => 1, 'weapon_id' => $weapon1->id, 'armor_id' => $armor1->id],
            ['name' => 'HunterD', 'sex' => 'Female', 'character_slot' => 2, 'weapon_id' => $weapon2->id, 'armor_id' => $armor2->id],

            ['name' => 'HunterE', 'sex' => 'Male', 'character_slot' => 1, 'weapon_id' => $weapon1->id, 'armor_id' => $armor1->id],
            ['name' => 'HunterF', 'sex' => 'Female', 'character_slot' => 2, 'weapon_id' => $weapon2->id, 'armor_id' => $armor2->id],
            ['name' => 'HunterG', 'sex' => 'Male', 'character_slot' => 3, 'weapon_id' => $weapon1->id, 'armor_id' => $armor1->id], // Third hunter for PlayerThree
        ];

        $i = 0;
        foreach ($users as $index => $user) {
            $count = ($index === 2) ? 3 : 2; // Ensure the third user (index 2) gets 3 hunters

            for ($j = 0; $j < $count; $j++) {
                if (!isset($hunters[$i])) {
                    break; // Prevent array out-of-bounds access
                }

                Hunter::create(array_merge($hunters[$i], ['user_id' => $user->id]));
                $i++;
            }
        }
    }
}

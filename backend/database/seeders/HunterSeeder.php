<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Hunter;
use App\Models\User;

class HunterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run():void
    {
        $users = User::all();

        // Assign hunters to users
        $hunters = [
            ['name' => 'HunterA', 'sex' => 'Male', 'character_slot' => 1],
            ['name' => 'HunterB', 'sex' => 'Female', 'character_slot' => 2],

            ['name' => 'HunterC', 'sex' => 'Male', 'character_slot' => 1],
            ['name' => 'HunterD', 'sex' => 'Female', 'character_slot' => 2],

            ['name' => 'HunterE', 'sex' => 'Male', 'character_slot' => 1],
            ['name' => 'HunterF', 'sex' => 'Female', 'character_slot' => 2],
            ['name' => 'HunterG', 'sex' => 'Male', 'character_slot' => 3], // Third hunter for PlayerThree
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

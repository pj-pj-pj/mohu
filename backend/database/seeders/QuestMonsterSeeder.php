<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Quest;
use App\Models\Monster;

class QuestMonsterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $questMonsterMap = [
            'Hunting Basics: Slay Jaggi' => ['Jaggi'],
            'Gathering: Mountain Herbs' => ['Arzuros', 'Jaggi'],
            'Felyne Feast: Deliver Fish' => ['Bulldrome'],
            'The Roar of the Arzuros' => ['Arzuros'],
            'The Pack Leader' => ['Jaggi'],
            'Bullfango Rampage' => ['Bulldrome'],
            'The Poisonous Peco' => ['Qurupeco', 'Jaggi'],
            'Royal Ludroth’s Domain' => ['Royal Ludroth'],
            'Rumble in the Tundra' => ['Lagombi'],
        ];

        foreach ($questMonsterMap as $questTitle => $monsterNames) {
            $quest = Quest::where('title', $questTitle)->first();
            if ($quest) {
                foreach ($monsterNames as $monsterName) {
                    $monster = Monster::where('name', $monsterName)->first();
                    if ($monster) {
                        $quest->monsters()->attach($monster->id);
                    }
                }
            }
        }
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Quest;

class QuestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $quests = [
            // ★1 Village Quests
            [
                'title' => 'Hunting Basics: Slay Jaggi',
                'main_goal' => 'Slay 5 Jaggi',
                'description' => 'Hunt 5 Jaggi in the Misty Peaks.',
                'difficulty' => 1,
                'hr_points' => 10,
                'reward' => 500,
                'location' => 'Misty Peaks',
                'hunting_fee' => 50,
            ],
            [
                'title' => 'Gathering: Mountain Herbs',
                'main_goal' => 'Gather 5 Mountain Herbs',
                'description' => 'Gather herbs for the village in the Misty Peaks.',
                'difficulty' => 1,
                'hr_points' => 5,
                'reward' => 300,
                'location' => 'Misty Peaks',
                'hunting_fee' => 30,
            ],
            [
                'title' => 'Felyne Feast: Deliver Fish',
                'main_goal' => 'Deliver 3 Goldenfish',
                'description' => 'Catch and deliver 3 Goldenfish for the Felynes.',
                'difficulty' => 1,
                'hr_points' => 8,
                'reward' => 700,
                'location' => 'Flooded Forest',
                'hunting_fee' => 50,
            ],

            // ★2 Village Quests
            [
                'title' => 'The Roar of the Arzuros',
                'main_goal' => 'Hunt an Arzuros',
                'description' => 'A troublesome Arzuros has been spotted in the Misty Peaks!',
                'difficulty' => 2,
                'hr_points' => 15,
                'reward' => 1200,
                'location' => 'Misty Peaks',
                'hunting_fee' => 100,
            ],
            [
                'title' => 'The Pack Leader',
                'main_goal' => 'Hunt a Great Jaggi',
                'description' => 'A Great Jaggi is leading its pack in the Misty Peaks. Take it down!',
                'difficulty' => 2,
                'hr_points' => 18,
                'reward' => 1500,
                'location' => 'Misty Peaks',
                'hunting_fee' => 120,
            ],
            [
                'title' => 'Bullfango Rampage',
                'main_goal' => 'Slay 10 Bullfango',
                'description' => 'A herd of aggressive Bullfango is causing chaos in the Sandy Plains.',
                'difficulty' => 2,
                'hr_points' => 12,
                'reward' => 800,
                'location' => 'Sandy Plains',
                'hunting_fee' => 80,
            ],

            // ★3 Village Quests
            [
                'title' => 'The Poisonous Peco',
                'main_goal' => 'Hunt a Qurupeco',
                'description' => 'A Qurupeco has been spotted mimicking monster calls. Hunt it down!',
                'difficulty' => 3,
                'hr_points' => 25,
                'reward' => 1800,
                'location' => 'Flooded Forest',
                'hunting_fee' => 150,
            ],
            [
                'title' => 'Royal Ludroth’s Domain',
                'main_goal' => 'Hunt a Royal Ludroth',
                'description' => 'A Royal Ludroth has made the Flooded Forest its domain. End its reign!',
                'difficulty' => 3,
                'hr_points' => 30,
                'reward' => 2000,
                'location' => 'Flooded Forest',
                'hunting_fee' => 180,
            ],
            [
                'title' => 'Rumble in the Tundra',
                'main_goal' => 'Hunt a Lagombi',
                'description' => 'A swift Lagombi is terrorizing the Tundra. Bring it down!',
                'difficulty' => 3,
                'hr_points' => 28,
                'reward' => 2200,
                'location' => 'Tundra',
                'hunting_fee' => 200,
            ]
        ];

        foreach ($quests as $quest) {
            Quest::create($quest);
        }
    }
}

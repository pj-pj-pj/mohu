<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\QuestTracker;
use App\Models\Hunter;
use App\Models\Quest;

class QuestTrackerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $hunters = Hunter::all();
        $quests = Quest::inRandomOrder()->limit(3)->get(); // Pick 3 random quests

        foreach ($hunters as $hunter) {
            if (rand(0, 1)) { // Randomly assign some quest trackers
                QuestTracker::create([
                    'hunter_id' => $hunter->id,
                    'quest_id' => $quests->random()->id,
                    'status' => 'accepted',
                ]);
            }
        }
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quest extends Model
{
    /** @use HasFactory<\Database\Factories\QuestFactory> */
    use HasFactory;

    protected $fillable = [
        'title',
        'main_goal',
        'description',
        'difficulty',
        'hr_points',
        'reward',
        'location',
        'hunting_fee'
    ];

    public function questTrackers()
    {
        return $this->hasMany(QuestTracker::class);
    }

    public function monsters() {
        return $this->belongsToMany(Monster::class, 'quest_monster');
    }
}

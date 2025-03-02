<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestTracker extends Model
{
    /** @use HasFactory<\Database\Factories\QuestTrackerFactory> */
    use HasFactory;

    protected $fillable = [
        'hunter_id', 
        'quest_id', 
        'status'
    ];

    // Each QuestTracker belongs to one Hunter
    public function hunter()
    {
        return $this->belongsTo(Hunter::class);
    }

    // Each QuestTracker belongs to one Quest
    public function quest()
    {
        return $this->belongsTo(Quest::class);
    }
}

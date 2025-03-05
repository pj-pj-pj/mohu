<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Hunter extends Model
{
    /** @use HasFactory<\Database\Factories\HunterFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'sex',
        'character_slot'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function questTrackers()
    {
        return $this->hasMany(QuestTracker::class);
    }

    public function weapon()
    {
        return $this->belongsTo(Weapon::class);
    }

    public function armor()
    {
        return $this->belongsTo(Armor::class);
    }
}

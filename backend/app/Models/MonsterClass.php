<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MonsterClass extends Model
{
    protected $fillable = [
        'name',
        'default_skills',
        'base_health',
        'base_stamina',
        'base_attack',
        'base_defense',
        'base_speed'
    ];

    protected $casts = [
        'default_skills' => 'array' // Ensures JSON skills are properly handled
    ];

    public function monsters()
    {
        return $this->hasMany(Monster::class);
    }
}

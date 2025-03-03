<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\MonsterClass;

class Monster extends Model
{
    protected $fillable = [
        'name',
        'monster_class_id',
        'element',
        'health',
        'stamina',
        'attack',
        'defense',
        'speed',
        'special_skills'
    ];

    protected $casts = [
        'special_skills' => 'array'
    ];

    public function monsterClass() {
        return $this->belongsTo(MonsterClass::class);
    }

    public function getActualHealthAttribute()
    {
        return $this->health ?? $this->monsterClass->base_health;
    }

    public function getActualStaminaAttribute()
    {
        return $this->stamina ?? $this->monsterClass->base_stamina;
    }

    public function getActualAttackAttribute()
    {
        return $this->attack ?? $this->monsterClass->base_attack;
    }

    public function getActualDefenseAttribute()
    {
        return $this->defense ?? $this->monsterClass->base_defense;
    }

    public function getActualSpeedAttribute()
    {
        return $this->speed ?? $this->monsterClass->base_speed;
    }

    // Merges default and special skills
    public function getAllSkillsAttribute()
    {
        return array_merge($this->monsterClass->default_skills, $this->special_skills ?? []);
    }
}

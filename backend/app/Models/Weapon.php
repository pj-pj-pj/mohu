<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Weapon extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'type', 'atk', 'spd', 'def', 'sharpness', 'description', 'skills'
    ];

    protected $casts = [
        'skills' => 'json',
    ];

    public function hunters()
    {
        return $this->hasMany(Hunter::class);
    }

    public function skills()
    {
        return $this->hasMany(WeaponSkill::class);
    }
}


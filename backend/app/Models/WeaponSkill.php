<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WeaponSkill extends Model
{
    use HasFactory;

    protected $fillable = [
        'weapon_id', 'name', 'power', 'stamina_cost'
    ];

    public function weapon()
    {
        return $this->belongsTo(Weapon::class);
    }
}


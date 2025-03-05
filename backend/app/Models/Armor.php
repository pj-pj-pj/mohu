<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Armor extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'def'];

    public function hunters()
    {
        return $this->hasMany(Hunter::class);
    }
}


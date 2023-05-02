<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exchange extends Model
{
    public function exchangeSkills()
    {
        return $this->hasMany('App\ExchangeSkill');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
}

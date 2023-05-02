<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExchangeSkill extends Model
{
    public function exchange()
    {
        return $this->belongsTo('App\Exchange');
    }
}

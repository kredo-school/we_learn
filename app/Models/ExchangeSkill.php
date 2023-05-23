<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExchangeSkill extends Model
{
    protected $table = 'exchange_skills';

    public function exchange()
    {
        return $this->belongsTo('App\Models\Exchange');
    }

    protected $fillable = [
        'exchange_id',
        'learn',
        'teach',
        'created_at'
    ];
}

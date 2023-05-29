<?php

namespace App\Models;

use App\Models\Comment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ExchangeSkill extends Model
{
    protected $table = 'exchange_skills';

    protected $fillable = [
        'exchange_id',
        'learn',
        'teach',
        'created_at'
    ];

    public function exchange()
    {
        return $this->belongsTo('App\Models\Exchange');
    }

    public function comments() {
        return $this->hasMany(Comment::class);
    }

    public function reactions() {
        return $this->belongsToMany(Exchange::class, 'likes', 'exchange_skill_id', 'exchange_id');
    }

    public function reactedBy($exchange_id) {
        return $this->reactions()->where('exchange_id', $exchange_id)->first();
    }

    
}

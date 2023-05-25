<?php

namespace App\Models;

use App\Models\Comment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ExchangeSkill extends Model
{
    protected $table = 'exchange_skills';

    public function exchange()
    {
        return $this->belongsTo('App\Models\Exchange');
    }

    public function comments() {
        return $this->hasMany(Comment::class);
    }

    protected $fillable = [
        'exchange_id',
        'learn',
        'teach',
        'created_at'
    ];
}

<?php

namespace App\Models;

use App\Models\Like;
use App\Models\Reply;
use App\Models\Exchange;
use App\Models\ExchangeSkill;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comment extends Model
{
    protected $fillable = ['comment', 'exchange_id', 'exchange_skill_id','comment_id'];

    public function exchange()
    {
        return $this->belongsTo(Exchange::class);
    }

    public function exchange_skill() {
        return $this->belongsTo(ExchangeSkill::class);
    }

    // public function learner()
    // {
    //     return $this->belongsTo('App\Learner');
    // }

    public function replies()
    {
        return $this->hasMany(Reply::class);
    }

    public function likes()
    {
        return $this->hasMany(Like::class);
    }

    public function reactions() {
        return $this->belongsToMany(Exchange::class, 'comment_likes','comment_id','exchange_id');
    }

    public function reactedBy($exchange_id) {
        return $this->reactions()->where('exchange_id', $exchange_id)->first();
    }
}



<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function exchange()
    {
        return $this->belongsTo('App\Exchange');
    }

    // public function learner()
    // {
    //     return $this->belongsTo('App\Learner');
    // }

    public function replies()
    {
        return $this->hasMany('App\Reply');
    }

    public function likes()
    {
        return $this->hasMany('App\Like');
    }
}



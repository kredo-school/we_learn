<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    public function comment()
    {
        return $this->belongsTo('App\Comment');
    }

    public function likes()
    {
        return $this->hasMany('App\Like');
    }
}

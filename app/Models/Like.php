<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    public function comment()
    {
        return $this->belongsTo('App\Comment');
    }

    public function reply()
    {
        return $this->belongsTo('App\Reply');
    }
}


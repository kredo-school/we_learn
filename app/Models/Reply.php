<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    protected $table = 'replies';

    protected $fillable = [
        'reply',
        'created_at',
        'exchange_id',
        'comment_id',
    ];

    public function exchange()
    {
        return $this->belongsTo('App\Models\Exchange');
    }

    public function comment()
    {
        return $this->belongsTo('App\Models\Comment');
    }

    public function likes()
    {
        return $this->hasMany('App\Models\Like');
    }
}

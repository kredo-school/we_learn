<?php

namespace App\Models;

use App\Models\Reply;
use App\Models\Comment;
use App\Models\ExchangeSkill;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Exchange extends Authenticatable
{
    public $timestamps = false;

    protected $table = 'exchanges';

    protected $guard = 'exchanges';


    protected $fillable = [
        'name',
        'email',
        'password',
        'age',
        'gender',
        'occupation',
        'residence',
        'category',
        'profile_img',
        'about',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];


    public function exchangeSkills()
    {
        return $this->hasMany(ExchangeSkill::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function replies()
    {
        return $this->hasMany(Reply::class);
    }


}

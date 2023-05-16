<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Exchange extends Authenticatable
{
    public $timestamps = false;

    protected $table = 'exchanges';

    protected $guard = 'exchanges';
    public function exchangeSkills()
    {
        return $this->hasMany('App\ExchangeSkill');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

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
}

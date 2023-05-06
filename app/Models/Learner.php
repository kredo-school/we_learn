<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
class Learner extends Authenticatable
{
    public $timestamps = false;
    protected $table = 'learners';
    public function reservations()
    {
        return $this->hasMany('App\Reservation');
    }

    public function messages()
    {
        return $this->hasMany('App\Message');
    }

    protected $fillable = [
        'name',
        'email',
        'password',
        'age',
        'gender',
        'residence',
    ];
    protected $hidden = [
        'password',
        'remember_token',
    ];

}


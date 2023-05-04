<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Learner extends Model
{
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


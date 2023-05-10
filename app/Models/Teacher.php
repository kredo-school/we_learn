<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
class Teacher extends Authenticatable
{
    public $timestamps = false;
    protected $table = 'teachers';
    protected $guard = 'teachers';

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
        'occupation',
        'residence',
        'language',
        'subject'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}


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
    protected $hidden = [
        'password',
        'remember_token',
    ];
    protected $fillable = [
        'name',
        'email',
        'password',
        'age',
        'gender',
        'occupation',
        'residence',
        'language',
        'subject',
        'learning_mode',
        'about',
        'profile_img'
    ];
    public function reservations()
    {
        return $this->hasMany('App\Models\Reservation');
    }

    public function messages()
    {
        return $this->hasMany('App\Message');
    }

}


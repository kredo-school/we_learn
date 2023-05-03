<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    public function teacher()
    {
        return $this->belongsTo('App\Teacher');
    }

    public function learner()
    {
        return $this->belongsTo('App\Learner');
    }
}

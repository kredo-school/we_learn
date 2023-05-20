<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    protected $table = 'reservations';

    public function teacher()
    {
        return $this->belongsTo('App\Models\Teacher');
    }

    public function learner()
    {
        return $this->belongsTo('App\Learner');
    }

    protected $fillable = [
        'id',
        'date',
        'time',
        'reserved',
        'teacher_id',
        'learner_id',
    ];
}

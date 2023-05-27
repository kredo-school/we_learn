<?php

namespace App\Models;

use App\Models\Learner;
use App\Models\Teacher;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Reservation extends Model
{
    use HasFactory;
    protected $table = 'reservations';

    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }

    public function learner()
    {
        return $this->belongsTo(Learner::class);
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

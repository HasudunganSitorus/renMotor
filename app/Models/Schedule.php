<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $table = 'schedules';
    protected $fillable = ['period', 'day', 'hour', 'subjectclass_id', 'teacher_id'];

    public function subjectClass()
    {
        return $this->belongsTo('App\Models\SubjectClass', 'subjectclass_id');
    }

    public function teacher()
    {
        return $this->belongsTo('App\Models\Teacher', 'teacher_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Registry extends Model
{
    protected $table = 'registries';
    protected $fillable = ['date', 'period', 'student_id', 'subjectclass_id'];

    public function student()
    {
        return $this->belongsTo('App\Models\Student', 'student_id');
    }

    public function subjectClass()
    {
        return $this->belongsTo('App\Models\SubjectClass', 'subjectclass_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompetenceTeacher extends Model
{
    protected $table = 'compotenceteachers';
    protected $fillable = ['subject', 'teacher_id'];

    public function teacher()
    {
        return $this->belongsTo('App\Models\Teacher', 'teacher_id');
    }
}

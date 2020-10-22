<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubjectClass extends Model
{
    protected $table = 'subjectclasses';
    protected $fillable = ['subjectname', 'major_id', 'point'];

    public function major()
    {
        return $this->belongsTo('App\Models\Major', 'major_id');
    }

    public function schedule()
    {
        return $this->hasMany('App\Models\Schedule');
    }

    public function competenceTeacher()
    {
        return $this->hasMany('App\Models\CompetenceTeacher');
    }

    public function requisite()
    {
        return $this->hasMany('App\Models\Requisite');
    }

    public function registry()
    {
        return $this->hasMany('App\Models\Registry', 'subjectclass_id');
    }
}

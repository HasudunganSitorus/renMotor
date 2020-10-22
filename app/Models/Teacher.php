<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $table = 'teachers';
    protected $fillable = ['nit', 'name', 'birthday', 'birthplace', 'gender'];

    public function competenceTeacher()
    {
        return $this->hasMany('App\Models\CompetenceTeacher');
    }

    public function schedule()
    {
        return $this->hasMany('App\Models\Schedule');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Major extends Model
{
    protected $table = 'majors';
    protected $fillable = ['name', 'expense'];

    public function subjectClass()
    {
        return $this->hasMany('App\Models\SubjectClass');
    }
}

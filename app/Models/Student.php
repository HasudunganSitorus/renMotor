<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';
    protected $fillable = ['nis', 'name', 'gender', 'birthday', 'birthplace', 'amountpoints'];

    public function registry()
    {
        return $this->hasMany('App\Models\Registry', 'student_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Requisite extends Model
{
    protected $table = 'requisites';
    protected $fillable = ['requisite', 'subjectclass_id'];
    
    public function subjectClass()
    {
        return $this->belongsTo('App\Models\SubjectClass', 'subjectclass_id');
    }

    
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Parents extends Model
{
    protected $table = 'parents';
    protected $fillable = ['id', 'name', 'gender'];

    public function childs()
    {
        return $this->hasMany('App\Models\Childs','parent_id');
    }

    public function grandchilds()
    {
        return $this->hasMany('App\Models\Grandchilds', 'grandchild_id','name');
    }
}

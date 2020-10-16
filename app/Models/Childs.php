<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Childs extends Model
{
    protected $table = 'childs';
    protected $fillable = ['id', 'name', 'gender', 'parent_id'];

    public function parents()
    {
        return $this->belongsTo('App\Models\Parents', 'parent_id');
    }

    public function grandchilds()
    {
        return $this->hasMany('App\Models\Grandchilds', 'grandchild_id');
    }
}

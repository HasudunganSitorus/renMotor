<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Grandchilds extends Model
{
    protected $table = 'grandchilds';
    protected $fillable = ['id', 'name', 'gender', 'parent_id', 'child_id'];

    public function parents()
    {
        return $this->belongsTo('App\Models\Parents', 'parent_id');
    }

    public function childs()
    {
        return $this->belongsTo('App\Models\Childs', 'child_id');
    }
}

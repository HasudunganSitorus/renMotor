<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Grandsons extends Model
{
    protected $table = 'grandsons';
    protected $fillable = ['id', 'name', 'gender', 'parent_id', 'grandfather_id'];

    public function parents()
    {
        return $this->belongsTo('App\Models\Parents', 'parent_id');
    }
    
    public function grandfathers()
    {
        return $this->belongsTo('App\Models\Grandfathers', 'grandfather_id');
    }
}

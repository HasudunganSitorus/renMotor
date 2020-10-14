<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Grandfathers extends Model
{
    protected $table = 'grandfathers';
    protected $fillable = ['id', 'name', 'gender'];

    public function parent()
    {
        return $this->hasMany('App\Models\Parents');
    }
    
    public function child()
    {
        return $this->belongsTo('App\Models\Childs');
    }
}

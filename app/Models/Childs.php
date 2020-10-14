<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Childs extends Model
{
    protected $table = 'childs';
    protected $fillable = ['id', 'name', 'gender', 'parent_id', 'grandfather_id'];

    public function parent()
    {
        return $this->belongsTo('App\Models\Parents', 'parent_id');
    }
    
    public function grandfather()
    {
        return $this->belongsTo('App\Models\Grandfathers', 'grandfather_id');
    }
}

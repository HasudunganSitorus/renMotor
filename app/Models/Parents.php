<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Parents extends Model
{
    protected $table = 'parents';
    protected $fillable = ['id', 'name', 'gender', 'grandfather_id'];

    public function child()
    {
        return $this->hasOne('App\Models\Childs');
    }
    public function grandfather()
    {
        return $this->belongsTo('App\Models\Grandfathers', 'grandfather_id');
    }
}

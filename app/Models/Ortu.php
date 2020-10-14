<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ortu extends Model
{
    protected $table = 'ortu';
    protected $fillable = ['id', 'nama', 'jenisKelamin'];

    public function cucu()
    {
        return $this->hasMany('App\Models\Cucu');
    }
}

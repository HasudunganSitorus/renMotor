<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cucu extends Model
{
    protected $table = 'cucus';
    protected $fillable = ['id', 'nama', 'jenisKelamin', 'ortu_id'];

    public function ortu()
    {
        return $this->belongsTo('App\Models\Ortu', 'ortu_id');
    }
}

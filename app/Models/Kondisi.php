<?php

namespace App\Models;
use App\Models\Motor;
use Illuminate\Database\Eloquent\Model;

class Kondisi extends Model
{
    protected $table = 'kondisi';
    protected $fillable = ['listrik', 'pengeraman', 'mesin', 'motor_id'];

    public function motor()
    {
        return $this->belongsTo('App\Models\Motor', 'motor_id');
    }
}

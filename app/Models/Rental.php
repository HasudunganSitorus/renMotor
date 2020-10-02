<?php

namespace App\Models;

use App\Models\Motor;
use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
    protected $table = 'rental';
    protected $fillable = ['id', 'motor_id', 'total', 'kondisi_id'];

    public function motor()
    {
        return $this->belongsTo(Motor::class, 'motor_id', 'id');
    }

    public function kondisi()
    {
        return $this->belongsTo('App\Models\Kondisi', 'kondisi_id');
    }
}

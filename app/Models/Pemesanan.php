<?php

namespace App\Models;

use App\Models\Motor;
use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    protected $table = 'pemesanan';
    protected $fillable = ['durasi', 'jumlah', 'motor_id', 'id'];
    
    public function getMotor()
    {
        return $this->belongsTo(Motor::class, 'motor_id');
    }

}

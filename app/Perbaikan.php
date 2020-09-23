<?php

namespace App;

use App\Motor;
use Illuminate\Database\Eloquent\Model;

class Perbaikan extends Model
{
    protected $table = 'perbaikan';
    protected $fillable = ['bagian', 'jumlah', 'total', 'motor_id'];
    
    public function getMotor()
    {
        return $this->belongsTo(Motor::class);
    }
}

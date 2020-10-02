<?php

namespace App\Models;

use App\Models\Motor;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    protected $table = 'pesanan';
    protected $fillable = ['id','total', 'motor_id'];

    public function motor()
    {
        return $this->belongsTo(Motor::class, 'motor_id');
    }
}

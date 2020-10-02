<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = 'transaksi';
    protected $fillable = ['id', 'rental_id', 'motor_id', 'total'];

    public function motor()
    {
        return $this->belongsTo('App\Models\User', 'motor_id');
    }
    public function rental()
    {
        return $this->belongsTo('App\Models\Rental', 'rental_id');
    }
}

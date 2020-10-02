<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ulasan extends Model
{
    protected $table = 'ulasan';
    protected $fillable = ['id', 'keterangan', 'motor_id', 'peyewa_id'];

    public function motor()
    {
        return $this->belongsTo('App\Models\Motor', 'motor_id');
    }
    
    public function rating()
    {
        return $this->hasOne('App\Models\Rating');
    }

    public function penyewa()
    {
        return $this->belongsTo('App\Models\Penyewa', 's');
    }
}

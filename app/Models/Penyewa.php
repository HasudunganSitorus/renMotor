<?php

namespace App\Models;

use App\Models\Penjadwalan;
use App\Models\Pemesanan;
use APP\Models\Faktur;
use Illuminate\Database\Eloquent\Model;

class Penyewa extends Model
{
    protected $table = 'penyewa';
    protected $fillable = ['id','nama', 'gambarProfile', 'gambarKtp', 'noHandphone'];

    public function motor()
    {
        return $this->belongsToMany('App\Models\Motor', 'motor_penyewa', 'penyewa_id', 'motor_id');
    }

    public function ulasan()
    {
        return $this->hasOne('App\Models\Ulasan');
    }
    public function penjadwalan()
    {
        return $this->hasMany(Penjadwalan::class, 'id');
    }

    public function pemesanan()
    {
        return $this->hasMany(Pemesanan::class, 'id');
    }
    
    public function faktur()
    {
        return $this->hasMany(Faktur::class, 'id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Motor extends Model
{
    protected $table = 'motors';
    protected $fillable = ['id','nama', 'noPlat', 'avatar'];

    
    public function penyewa()
    {
        return $this->hasOne('App\Models\Penyewa','motor_penyewa','motor_id', 'penyewa_id');
    }

    public function kondisi()
    {
        return $this->hasOne('App\Models\Kondisi');
    }
    public function ulasan()
    {
        return $this->hasOne('App\Models\Ulasan');
    }

    public function service()
    {
        return $this->hasMany(Service::class);
    }

    public function penjadwalan()
    {
        return $this->hasMany(Penjadwalan::class, 'id');
    }

    public function faktur()
    {
        return $this->hasMany(faktur::class, 'id');
    }

    public function perbaikan()
    {
        return $this->hasMany(Perbaiakan::class, 'id');
    }

    public function pemesanan()
    {
        return $this->hasMany(Pemesanan::class, 'id');
    }

    public function perlengkapan()
    {
        return $this->hasMany(Perlengkapan::class, 'id');
    }

    public function customer()
    {
        return $this->belongsTo('App\Models\Customer');
    }
}

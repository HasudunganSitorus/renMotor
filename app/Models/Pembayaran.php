<?php

namespace App\Models;

use App\Models\Penghasilan;
use App\Models\Pemesanan;
use App\Models\Faktur;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    protected $table = 'pembayaran';   
    protected $fillable = ['id', 'tipe', 'jumlah', 'total', 'pemesanan_id'];

    public function penghasilan()
    {
        return $this->hasMany(Penghasilan::class, 'id');
    }

    public function pemesanan()
    {
        return $this->belongsTo(Pemesanan::class, 'pemesanan_id');
    }

    public function faktur()
    {
        return $this->hasMany(Faktur::class, 'id');
    }
}

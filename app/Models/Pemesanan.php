<?php

namespace App\Models;

use App\Models\Motor;
use App\Models\Perlengkapan;
use App\Models\Penyewa;
use App\Models\Faktur;
use App\Models\Pembayaran;
use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    protected $table = 'pemesanan';
    protected $fillable = ['id','durasi', 'penyewa_id', 'perlengkapan_id','jumlah', 'motor_id', 'tanggal'];
    
    public function motor()
    {
        return $this->belongsTo(Motor::class, 'motor_id');
    }

    public function penyewa()
    {
        return $this->belongsTo(Penyewa::class, 'penyewa_id');
    }
    public function perlengkapan()
    {
        return $this->belongsTo(Perlengkapan::class, 'perlengkapan_id');
    }

    public function pembayaran()
    {
        return $this->hasMany(Pembayaran::class, 'id');
    }

    public function faktur()
    {
        return $this->hasMany(Faktur::class, 'id');
    }
}

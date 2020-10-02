<?php

namespace App\Models;

use App\Models\Motor;
use App\Models\Penyewa;
use App\Models\Pembayaran;
use App\Models\Pemesanan;
use Illuminate\Database\Eloquent\Model;

class Faktur extends Model
{
    protected $table = 'faktur';
    protected $fillable = ['id', 'motor_id', 'penyewa_id', 'pembayaran_id', 'pemesanan_id'];

    public function motor()
    {
        return $this->belongsTo(Motor::class, 'motor_id');
    }

    public function penyewa()
    {
        return $this->belongsTo(Penyewa::class, 'penyewa_id');
    }

    public function pembayaran()
    {
        return $this->belongsTo(Pembayaran::class, 'pembayaran_id');
    }

    public function pemesanan()
    {
        return $this->belongsTo(Pemesanan::class, 'pemesanan_id');
    }
}
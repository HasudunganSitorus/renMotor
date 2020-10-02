<?php

namespace App\Models;

use App\Models\Pembayaran;
use App\Models\BiayaService;
use App\Models\Perbaikan;
use Illuminate\Database\Eloquent\Model;

class Penghasilan extends Model
{
    protected $table = 'penghasilan';
    protected $fillable = ['id', 'pembayaran_id', 'perbaikan_id', 'biayaservice_id', 'tanggal', 'total'];

    public function pembayaran()
    {
        return $this->belongsTo(Pembayaran::class, 'pembayaran_id');
    }

    public function biayaService()
    {
        return $this->belongsTo(BiayaService::class, 'biayaservice_id');
    }

    public function perbaikan()
    {
        return $this->belongsTo(Perbaikan::class, 'perbaikan_id');
    }
}

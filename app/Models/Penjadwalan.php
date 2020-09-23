<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Penjadwalan extends Model
{
    protected $table = 'penjadwalan';
    protected $fillable = ['jamMasuk', 'jamKeluar', 'penyewaan_id'];

    public function penyewa()
    {
        return $this->belongsTo(Penyewa::class, 'penyewaan_id');
    }
}

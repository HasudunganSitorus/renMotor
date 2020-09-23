<?php

namespace App;

use App\Models\Penyewa;
use Illuminate\Database\Eloquent\Model;

class Penjadwalan extends Model
{
    protected $table = 'pennjadwalan';
    protected $fillable = ['jamMasuk', 'jamKeluar', 'penyewaan_id'];

    public function penyewa()
    {
        return $this->belongsTo(Penyewa::class, 'penyewaan_id');
    }
}

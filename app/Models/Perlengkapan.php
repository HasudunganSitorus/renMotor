<?php

namespace App\Models;

use App\Models\Motor;
use App\Models\Pemesanan;
use Illuminate\Database\Eloquent\Model;

class Perlengkapan extends Model
{
    protected $table = 'perlengkapan';
    protected $fillable = ['helm', 'document', 'motor_id'];

    public function motor()
    {
        return $this->belongsTo(Motor::class, 'motor_id');
    }

    public function pemesanan()
    {
        return $this->hasMany(Pemesanan::class, 'id');
    }
}

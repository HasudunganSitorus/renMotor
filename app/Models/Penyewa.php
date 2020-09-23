<?php

namespace App\Models;

use App\Models\Penjadwalan;
use Illuminate\Database\Eloquent\Model;

class Penyewa extends Model
{
    protected $table = 'penyewa';
    protected $fillable = ['id','nama', 'gambarProfile', 'gambarKtp', 'noHandphone'];

    public function motors()
    {
        return $this->hasMany(Motor::class, 'id');
    }

    public function penjadwalan()
    {
        return $this->hasMany(Penjadwalan::class, 'id');
    }
}

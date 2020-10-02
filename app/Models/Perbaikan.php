<?php

namespace App\Models;

use App\Models\Motor;
use App\Models\Penghasilan;
use Illuminate\Database\Eloquent\Model;

class Perbaikan extends Model
{
    protected $table = 'perbaikan';
    protected $fillable = ['id', 'bagian', 'jumlah', 'total','tanggal']; 

    public function motor()
    {
        return $this->hasMany(Motor::class, 'id');
    }
    public function Penghasilan()
    {
        return $this->hasMany(Penghasilan::class, 'id');
    }
}

<?php

namespace App\Models;

use App\Models\Penyewa;
use App\Models\Perlengkapan;
use App\Models\service;
use Illuminate\Database\Eloquent\Model;

class Motor extends Model
{
    protected $table = 'motors';
    protected $fillable = ['id','nama', 'noPlat','kondisi','avatar', 'penyewa_id', 'perlengkapan_id'];

    
    public function getPenyewa()
    {
        return $this->belongsTo(App\Models\Penyewa::class, 'penyewa_id');
    }

    public function getService()
    {
        return $this->hasMany(Service::class, 'id');
    }
    
}

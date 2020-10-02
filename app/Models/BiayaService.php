<?php

namespace App\Models;

use App\Models\Service;
use App\Models\Penghasilan;
use Illuminate\Database\Eloquent\Model;

class BiayaService extends Model
{
    protected $table = 'biayaservice';
    protected $fillable = ['id', 'steam', 'karburator', 'kelistrikan', 'pengereman', 'total', 'service_id', 'total'];

    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id');
    }
    
    public function penghasilan()
    {
        return $this->hasMany(Penghasilan::class, 'id');
    }
}

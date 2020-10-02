<?php

namespace App\Models;

use App\Models\Motor; 
use App\Models\BiayaService;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = 'service';
    protected $fillable = ['id','steam', 'karburator', 'kelistrikan', 'pengereman', 'motor_id', 'tanggal'];    

    public function motor()
    {
        return $this->hasMany(Motor::class, 'id');
    }


    public function biayaservice()
    {
        return $this->hasMany(BiayaService::class, 'id');
    }
}

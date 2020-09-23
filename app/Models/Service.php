<?php

namespace App\Models;

use App\Models\Motor; 
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = 'service';
    protected $fillable = ['steam', 'karburator', 'kelistrikan', 'pengereman', 'motor_id'];    

    public function motor()
    {
        return $this->belongsTo(Motor::class, 'motor_id');
    }
}

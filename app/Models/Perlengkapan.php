<?php

namespace App\Models;

use App\Models\Motor;
use Illuminate\Database\Eloquent\Model;

class Perlengkapan extends Model
{
    protected $table = 'perlengkapan';
    protected $fillable = ['helm', 'document', 'motor_id'];

    public function perlengkapanTakenMotor()
    {
        return $this->belongsTo(Motor::class);
    }
}

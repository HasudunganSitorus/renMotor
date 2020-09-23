<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ListMotor extends Model
{
    protected $table = 'ListMotor';
    protected $fillable = ['namaMotor', 'tahunMotor', 'stnkMotor', 'gambarMotor', 'kondisiMotor'];
}

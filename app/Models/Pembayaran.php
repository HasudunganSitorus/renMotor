<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    protected $table = 'pembayaran';   
    protected $fillable = ['id','tipe','order_id', 'jumlah', 'total'];

    
}

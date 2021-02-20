<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customers';
    protected $fillable = ['id', 'name', 'email', 'addresss', 'phone', 'total','motor_id'];

    public function motor()
    {
        return $this->hasMany('App\Models\Motor');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    protected $table = 'rating';
    protected $fillable = ['id', 'ulasan_id', 'jumlah'];

    public function ulasan()
    {
        return $this->belongsTo('App\Models\Ulasan', 'ulasan_id');
    }
}

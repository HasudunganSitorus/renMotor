<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = ['category_id', 'name', 'description', 'price', 'id'];
    public function categories()
    {
        return $this->belongsTo(Categories::class);
    }
}

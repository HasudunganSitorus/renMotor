<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = 'tags';
    protected $fillable = ['name'];

    public function articles()
    {
        return $this->belongsToMany('App\Models\Article', 'article_tag', 'article_id', 'tag_id');
    }
}

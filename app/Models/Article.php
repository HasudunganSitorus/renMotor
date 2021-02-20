<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';
    protected $fillable = ['title', 'body', 'slug'];

    public function tags()
    {
        return $this->belongsToMany('App\Models\Tag', 'article_tag', 'article_id', 'tag_id');
    }
}


<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $guarded = [
    '_method',
    '_token',
    'tags'
    ];

    public function tagsarticles() {
        return $this->belongsToMany('App\Tagsarticle');
    }

    public function category() {
        return $this->belongsTo('App\CategoriesArticle');
    }
}

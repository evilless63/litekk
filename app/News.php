<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $guarded = [
        '_method',
        '_token',
        'tags'
    ];

    public function tagnews()
    {
        return $this->belongsToMany('App\TagsNews');
    }

    public function category()
    {
        return $this->belongsTo('App\CategoriesNews');
    }
}

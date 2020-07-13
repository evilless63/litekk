<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TagsNews extends Model
{
    protected $guarded = [];

    public function news() {
        return $this->belongToMany('App\News');
    }
}

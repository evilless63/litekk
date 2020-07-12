<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tagsarticle extends Model
{
    protected $guarded = [];

    public function articles() {
        return $this->belongToMany('App\Article');
    }
    
}

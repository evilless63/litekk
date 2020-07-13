<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoriesArticle extends Model
{

    protected $guarded = [
        '_method',
        '_token',
    ];
    

    public function articles()
    {
        return $this->hasMany('App/Article');
    }
}

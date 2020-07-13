<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoriesNews extends Model
{
    protected $guarded = [
        '_method',
        '_token',
    ];

    public function news()
    {
        return $this->hasMany('App/News');
    }
}

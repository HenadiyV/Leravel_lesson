<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'slug',
        'title',
    ];

    public function posts()
    {
        return $this->hasMany('App\Post');
    }
}

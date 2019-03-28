<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string title
 */
class Post extends Model
{
    protected $fillable = [
        'slug',
        'title',
        'body',
        'category_id',
        'image',
    ];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }
//   мутации
//    public function setTitleAttribute($title)
//{
//   return $this->attributes['title']=rtrim($this->title,'!');//json_decode
//}
//    public function getTitleAttribute()
//{
//    return  $this->title=$this->title.'~~~~';//json_encode
//    }

}

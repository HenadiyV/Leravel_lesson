<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
    protected $fillable = [
        'id',
       'name'
    ];
    public function doctor()
    {
        return $this->belongsTo('App\Doctors');
    }
}

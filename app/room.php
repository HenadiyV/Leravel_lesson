<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class room extends Model
{
    protected $fillable = [
        'id',
        'name_room'
    ];
    public function doctor()
    {
        return $this->belongsTo('App\Doctors');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class schedule extends Model
{
    protected $fillable = [
        'id',
        'day',
        'time',
        'id_doctor'
    ];
    public function doctor()
    {
        return $this->belongsTo('App\Doctors');
    }
}

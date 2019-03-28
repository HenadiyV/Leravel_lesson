<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class patient extends Model
{
    //
    protected $fillable = [

//        'surname',
        'name',
        'email',
        'id_doctor',
        'doctor',
        'profile',
        'data',
        'room',
        'id_room',
        'time',
        'id_time'

    ];
}

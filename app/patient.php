<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class patient extends Model
{
    //
    protected $fillable = [
        'id',
        'surname',
        'name',
        'patronymic',
        'photo',
        'id_doctor',
        'id_room'
    ];
}

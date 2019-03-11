<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class working extends Model
{
    protected $fillable = [
        'id',
        'id_doctor',
        'id_room',
        'id_schedule',
        'status'

    ];
}

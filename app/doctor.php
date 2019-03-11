<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class doctor extends Model
{
    protected $fillable = [
        'Id',
        'surname',
        'name',
        'patronymic',
        'photo',
        'id_profile',
        'id_room'
    ];

public function schedules()
{
    return $this->hasMany('App\schedule');
}
    public function rooms()
    {
        return $this->belongsTo('App\room');
    }
    public function profiles()
    {
        return $this->belongsTo('App\profile');
    }
}
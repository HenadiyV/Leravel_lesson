<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class doctor extends Model
{
    protected $fillable = [
        'id',
        'surname',
        'name',
        'patronymic',
        'photo',
        'id_profile',
        'id_room',
        'id_schedule'
    ];

public function schedules()
{
    return $this->belongsTo('App\schedule');
}
    public function rooms()
    {
        return $this->belongsTo('App\room');
    }
    public function profiles()
    {
        return $this->belongsTo('App\profile');
    }
public function getIdProfileAttribute($id_profile)
{
    $prof= profile::all()->where('id','=',$id_profile)->first();
    return $this->attributes['id_profile']=$prof['name'];
}
    public function getIdRoomAttribute($id_room){
        $rom= room::all()->where('id','=',$id_room)->first();
        return $this->attributes['id_room']=$rom['name_room'];
    }

}
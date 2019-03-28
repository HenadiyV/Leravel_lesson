<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class time_schedule extends Model
{
    protected $fillable = [
        'id','time'
    ];
    public function schedule()
    {
        return $this->hasMany('App\schedule');
    }
}

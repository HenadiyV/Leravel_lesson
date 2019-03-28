<?php

namespace App;

use function GuzzleHttp\Psr7\parse_request;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
/**
 * @method value(string $string)
 */
class schedule extends Model
{

    protected $fillable = [
 'monday',
'tuesday',
'wednesday',
'thursday',
'friday',
'saturday',
'sunday',
'id_startMonday',
'id_stopMonday',
'id_startTuesday',
'id_stopTuesday',
'id_startWednesday',
'id_stopWednesday',
'id_startThursday',
'id_stopThursday',
'id_startFriday',
'id_stopFriday',
'id_startSaturday',
'id_stopSaturday',
'id_startSunday',
'id_stopSunday',
 'doctor',
'id_doctor',
'status',
        'mon',
        'tues',
        'wednes',
        'thurs',
        'fri',
        'satur',
        'sun'
    ];
    public function doctor()
    {
        return $this->belongsTo('App\Doctors');
    }
    public function time_schedule()
    {
        return $this->hasMany('App\time_schedule');
    }
   public function getDoctorAttribute($doctor){

        $name=doctor::all()->where('id','=',$doctor)->first();
        $fio=$name['surname'].' '.$name['name'].' '.$name['patronymic'];
       return $this->attributes['doctor']=$fio;

  }
//    public function setMondayAttribute($monday){
//
////        if($monday=="on"){
////            return $this->attributes['monday']=1;
////        }else{
////            return $this->attributes['monday']=0;
////        }
//        return $this->attributes['monday'];
//    }
    public function getMondayAttribute($monday){

        if($monday>0){
            return $this->attributes['monday']='рабочий' ;
        }else{
            return $this->attributes['monday']='выходной';
    }

    }

    public function getIdStartMondayAttribute($id_startMonday){

//    $time=  time_schedule::all()->where('id','=',$id_startMonday)->first();
    return $this->attributes['id_startMonday'];
}
    public function getIdStopMondayAttribute($id_stopMonday){

//        $time=  time_schedule::all()->where('id','=',$id_stopMonday)->first();
        return $this->attributes['id_stopMonday'];
    }
    public function getIdStartTuesdayAttribute($id_startTuesday){

//        $time=  time_schedule::all()->where('id','=',$id_startTuesday)->first();
        return $this->attributes['id_startTuesday'];
    }
    public function getIdStopTuesdayAttribute($id_stopTuesday){

//        $time=  time_schedule::all()->where('id','=',$id_stopTuesday)->first();
        return $this->attributes['id_stopTuesday'];
    }
    public function getIdStartWednesdayAttribute($id_startWednesday){

//        $time=  time_schedule::all()->where('id','=',$id_startWednesday)->first();
        return $this->attributes['id_startWednesday'];
    }
    public function getIdStopWednesdayAttribute($id_stopWednesday){

//        $time=  time_schedule::all()->where('id','=',$id_stopWednesday)->first();
        return $this->attributes['id_stopWednesday'];
    }
    public function getIdStartThursdayAttribute($id_startThursday){

//        $time=  time_schedule::all()->where('id','=',$id_startThursday)->first();
        return $this->attributes['id_startThursday'];
    }
    public function getIdStopThursdayAttribute($id_stopThursday){

//        $time=  time_schedule::all()->where('id','=',$id_stopThursday)->first();
        return $this->attributes['id_stopThursday'];
    }
    public function getIdStartFridayAttribute($id_startFriday){

//        $time=  time_schedule::all()->where('id','=',$id_startFriday)->first();
        return $this->attributes['id_startFriday'];
    }
    public function getIdStopFridayAttribute($id_stopFriday){

//        $time=  time_schedule::all()->where('id','=',$id_stopFriday)->first();
        return $this->attributes['id_stopFriday'];
    }
    public function getIdStartSaturdayAttribute($id_startSaturday){

//    $time=  time_schedule::all()->where('id','=',$id_startSaturday)->first();
    return $this->attributes['id_startSaturday'];
}
    public function getIdStopSaturdayAttribute($id_stopSaturday){

//        $time=  time_schedule::all()->where('id','=',$id_stopSaturday)->first();
        return $this->attributes['id_stopSaturday'];
    }
    public function getIdStartSundayAttribute($id_startSunday){

//        $time=  time_schedule::all()->where('id','=',$id_startSunday)->first();
        return $this->attributes['id_startSunday'];
    }
    public function getIdStopSundayAttribute($id_stopSunday){

//        $time=  time_schedule::all()->where('id','=',$id_stopSunday)->first();
        return $this->attributes['id_stopSunday'];
    }

//    public function setTuesdayAttribute($tuesday){
//
////        if($tuesday=="on"){
////            return $this->attributes['tuesday']=1;
////        }else{
////            return $this->attributes['tuesday']=0;
////        }
//        return $this->attributes['tuesday'];
//
//    }
    public function getTuesdayAttribute($tuesday){

        if($tuesday>0){
            return $this->attributes['tuesday']='рабочий' ;
        }else{
            return $this->attributes['tuesday']='выходной';
        }

    }
//    public function setWednesdayAttribute($wednesday){
//
////        if($wednesday=="on"){
////            return $this->attributes['wednesday']=1;
////        }else{
////            return $this->attributes['wednesday']=0;
////        }
//        return $this->attributes['wednesday'];
//    }
    public function getWednesdayAttribute($wednesday){

        if($wednesday>0){
            return $this->attributes['wednesday']='рабочий' ;
        }else{
            return $this->attributes['wednesday']='выходной';
     }

    }
//    public function setThursdayAttribute($thursday){
//
////        if($thursday=="on"){
////            return $this->attributes['thursday']=1;
////        }else{
////            return $this->attributes['thursday']=0;
////        }
//        return $this->attributes['thursday'];
//    }
    public function getThursdayAttribute($thursday){

        if($thursday>0){
            return $this->attributes['thursday']='рабочий' ;
        }else{
            return $this->attributes['thursday']='выходной';
        }

    }
//    public function setFridayAttribute($friday){
//
////        if($friday=="on"){
////            return $this->attributes['friday']=1;
////        }else{
////            return $this->attributes['friday']=0;
////        }
//        return $this->attributes['friday'];
//    }
    public function getFridayAttribute($friday){

        if($friday>0){
            return $this->attributes['friday']='рабочий' ;
        }else{
            return $this->attributes['friday']='выходной';
        }

    }
//    public function setSaturdayAttribute($saturday){
//
////        if($saturday=="on"){
////            return $this->attributes['saturday']=1;
////        }else{
////            return $this->attributes['saturday']=0;
////        }
//        return $this->attributes['saturday'];
//    }
    public function getSaturdayAttribute($saturday){

        if($saturday>0){
            return $this->attributes['saturday']='рабочий' ;
        }else{
            return $this->attributes['saturday']='выходной';
        }

    }
//    public function setSundayAttribute($sunday){
//
////        if($sunday=="on"){
////            return $this->attributes['sunday']=1;
////        }else{
////            return $this->attributes['sunday']=0;
////        }
//        return $this->attributes['sunday'];
//    }
    public function getSundayAttribute($sunday){

        if($sunday>0){
            return $this->attributes['sunday']='рабочий' ;
        }else{
            return $this->attributes['sunday']='выходной';
        }

    }
    public function setStatusAttribute($status){

        if($status=="on"){
            return $this->attributes['status']=1;
        }else{
            return $this->attributes['status']=0;
        }

    }
//    public function getStatusAttribute($status){
//
////        if($status>0){
////            return $this->attributes['status']="Работает" ;
////        }else{
////            return $this->attributes['status']="Отсутствует";
////        }
//        return $this->attributes['status'];
//    }

}

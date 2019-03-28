<?php

namespace App\Http\Controllers;

use App\doctor;
use App\patient;
use App\schedule;
use App\time_schedule;
use App\working;
use Carbon\Carbon;
use Carbon\CarbonInterval;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use \Laravelrus\LocalizedCarbon\Traits\LocalizedEloquentTrait;

class WorkingsController extends Controller
{
    public function index()
    {
        $doctors = doctor::all();

        return view('workings.index', compact('doctors'));

    }
    public function create()
    {
        return view('workings.form');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'surname'=> 'required',
//            'id_room'=> 'required',
//            'id_schedule'=> 'required',
//            'status'=> 'required'
        ]);

        working::create($request->all());

        return redirect()->route('workings.index');
    }
    public function edit(working $working)
    {
        $entity = $working;
        return view('workings.form', compact('entity'));
    }
    public function update(Request $request, working $working)
    {
        $this->validate($request, [
            'surname'=> 'required',
//            'id_room'=> 'required',
//            'id_schedule'=> 'required',
//            'status'=> 'required'
        ]);
        $working->update($request->all());

        return redirect()->route('schedules.index');
    }
    public function destroy(working $working)
    {
        $working->delete();
        return redirect()->route('workings.index');
    }
    public function show($id){

//        CarbonInterval::setLocale('ru');
//           $date1 = Carbon::now()->formatLocalized('%A %d %m %Y');//'l )
$date1=Carbon::now()->format('l');
            //dd($date);
            $mydate=array();
            for($i=0;$i<7;$i++){
               $t1  = mktime(0, 0, 0, date("m")  , date("d")+$i, date("Y"));
//                $tp=date('d m Y',  $t1);
                $tp=Carbon::now()->addDay($i)->format('d-m-Y');
               $ts=date('l',$t1);
                $dat1=array($ts,$tp);
                array_push($mydate,$dat1);
            }
//print_r($mydate);
            //die;
            //dd($mydate);
           // $data = date('l\ d \ m');
//            $tomorrow1  = mktime(0,0,0, date('m'),date('d')+1, date('Y'));
//            $tomorrow=date('l \ d \ m \ Y', $tomorrow1);
        ////////////////////////
           $time=time_schedule::all()->toArray();
            $time = array_combine(array_column($time, 'id'), array_column($time, 'time'));
            $stop = array_reverse($time);

////////////////////////////
            $schedule= schedule::where('id_doctor',$id)->first();//
       // dd($schedule);
        $work=patient::where('id_doctor',$id)->get();
        //dd($work);

//        $monday=array();
//        $tuesday=array();
//            $wednesday=array();
//                $thursday=array();
//                    $friday=array();
//                        $saturday=array();
//                            $sunday=array();
        $temp_patient=array();
        foreach($work as $wr){
            $dt=Carbon::parse($wr['data'])->format('d-m-Y');;
            $aa=Carbon::parse($dt)->format('l');

//if($aa=='Monday'){
//    for($i=$schedule->id_startMonday;$i<$schedule->id_stopMonday;$i++){
//    $id_time=$wr->id_time;
//    }
//}
//if($aa=='Tuesday'){}
//if($aa=='Wednesday'){}
//if($aa=='Thursday'){}
//if($aa=='Friday'){}
//if($aa=='Saturday'){}
//if($aa=='Sunday'){}
           // dd($aa);
            $t=$wr['id_time'];
           $temp1=array($aa,$dt,$t);
           array_push($temp_patient,$temp1);
        }
        //dd($temp);
       // $temp_patient =array();
//foreach($mydate as $md)
//{
//
//   // dd($md); //0 => "Thursday"  1 => "28-03-2019"
//    foreach($temp as $tm)
//    {
//       // dd($tm[0]); //0 => "2019-03-31"  1 => 2
//
//
//
//        if($md[1]==$tm[1]){
//            dd($md[0]);
//            $temData=Carbon::parse($tm[0])->format('d-m-Y');
//            $t_patient=array($md[0],$temData,$tm[1]);
//            array_push($temp_patient,$t_patient);
//        }
//
//    }
//}
//dd($temp_patient);
//        0 => array:3 [▼
//    0 => "Tuesday"
//    1 => "2019-03-31"
//    2 => 2
//  ]




//        $time = '2015-01-01';
//        $dnum = date("w",strtotime($time));
//        $textday = $day[$dnum];
//        echo $textday;

//        for($j=0;$j<1;$j++)
//        {
//            $tp=Carbon::now()->addDay($j)->format('l');
//            $dt=Carbon::now()->addDay($j)->format('d-m-Y');
//            if($tp==$schedule->mon){$mon=$dt;
//        $monday=array($dt,$tp);
//
//        if($schedule->monday=='рабочий'){
//
//        for($i=$schedule->id_startMonday;$i<$schedule->id_stopMonday;$i++)
//        {
//            $id_t=$i;
//            $tim=$time[$i];
//            $id_time=array($id_t,$tim);
//            array_push($monday,$id_time);
//        }
//        }
//        }
//
//        $tuesday=array();
//
//            if($schedule->tuesday=='рабочий') {
//                for($i = $schedule->id_startTuesday; $i < $schedule->id_stopTuesday; $i++) {
//                    $id_t = $i;
//                    $tim = $time[$i];
//                    $id_time = array($id_t, $tim);
//                    array_push($tuesday, $id_time);
//                }
//            }
//            //dd($schedule->wednes);
//            if($tp==$schedule->wednes) {
//                $wed = $dt;
//                $wednesday = array($dt,$tp);
//                if($schedule->wednesday == 'рабочий') {
//                    for($i = $schedule->id_startWednesday; $i < $schedule->id_stopWednesday; $i++) {
//                        $id_t = $i;
//                        $tim = $time[$i];
//                        $id_time = array($id_t, $tim);
//                        array_push($wednesday, $id_time);
//                    }
//                }
//            }
//            dd($wednesday);
//            $thursday=array();
//            if($schedule->thursday=='рабочий') {
//                for($i = $schedule->id_starThursday; $i < $schedule->id_stopThursday; $i++) {
//                    $id_t = $i;
//
//                    $tim = $time[$i];
//                    $id_time = array($id_t, $tim);
//                    array_push($thursday, $id_time);
//                }
//            }
//            $friday=array();
//
//            if($schedule->friday=='рабочий') {
//                for($i = $schedule->id_startFriday; $i < $schedule->id_stopFriday; $i++) {
//                    $id_t = $i;
//                    $tim = $time[$i];
//                    $id_time = array($id_t, $tim);
//                    array_push($friday, $id_time);
//                }
//            }
//            $saturday=array();
//            if($schedule->saturday=='рабочий') {
//                for($i=$schedule->id_starSaturday;$i<$schedule->id_stopSaturday;$i++)
//                {
//                    $id_t=$i;
//                    $tim=$time[$i];
//                    $id_time=array($id_t,$tim);
//                    array_push($saturday,$id_time);
//                }
//            }
//        $sunday=array();
//        if($schedule->sunday=='рабочий') {
//            for($i = $schedule->id_starSunday; $i < $schedule->id_stopSunday; $i++) {
//                $id_t = $i;
//                $tim = $time[$i];
//                $id_time = array($id_t, $tim);
//                array_push($sunday, $id_time);
//            }
//        }
//        }
            // dd($schedule);
            $doctors=doctor::where('id',$id)->first();
           // dd($doctors);

         //  $patient1=patient::where('id_doctor',$id)->first();

//           if($patient1!=null){
//           $patient=new patient();
//
//        $patient->id_room=$patient1->id_room;
//        $patient->id_time=$patient1->id_time;
//        $patient->room=$patient1->room;
//        $patient->time=$patient1->time;
//        $patient->data= Carbon::parse($patient1->data)->format('d-m-Y');
//        $patient->id_doctor=$patient1->id_doctor;
//        $patient->profile=$patient1->profile;
//           }
//        '',
//        'time',
//'id_time',
//        'data',

//$working=new working();
//$working->id_doctor=$id;
//$working->monday=$monday;
//$working->tuesday=$tuesday;
//$working->wednesday=$wednesday;
//$working->thursday=$thursday;
//$working->friday=$friday;
//$working->saturday=$saturday;
//$working->sunday=$sunday;
   // dd($patient);
            return view('workings.singUpDoctor', compact('doctors','schedule','time','stop','mydate','temp_patient','date1'));
        }
    public function singUP(Request $request){
//        $patien=patient::
      //dd($request);// приходит время дата id_time id_schedule
        $time1=$request['id_time'];
        $time2=$request['time'];
        //$time=new time_schedule();
        $time =array($time1,$time2) ;
        //dd($time);
       // $data=strtotime($request['data']);
      /////////  $data=Carbon::parse($request['data'])->format('Y-m-d ');
      ///////// dd($data);
        $data=$request['data'];
        $profile=doctor::where('id',$request['schedule'])->first();
        $schedule=schedule::where('id',$request['schedule'])->first();
//dd($profile);
        return view('workings.singUpPatient ', compact('schedule','time','data','profile'));
    }
    public function save(Request $request){
//        $doc=$request['doctor']['id_doctor'];
      // dd($request->all());strtotime->format('d-m-Y')
//$str=();
//        preg_match_all('  ', $request->item,' ');
     //  print_r($request);
       // die;
//$t=date('Y-m-d', strtotime($request->item));
//dd($request);

        $patient = new patient();
        $patient->name=Auth::user()->name;
        $patient->email=Auth::user()->email;
        $patient->doctor=$request->doctor;
        $patient->id_room=$request->id_room;
        $patient->id_time=$request->id_time;
        $patient->room=$request->room;
        $patient->time=$request->time;
         $patient->data= Carbon::parse($request->data)->format('Y-m-d ');
         $patient->id_doctor=$request->id_doctor;
        $patient->profile=$request->profile;
        //$patient->data=date('Y m d', strtotime($request->item));
     $patient->save();
      // dd($patient);
   //$patient = new patient();// создаем модель
//    $patient->bd =// поля модели
//
//        $patient->save();// сохранение
        // Auth::id(); // данный пользователь

//        $mydate=array();
//        for($i=1;$i<=7;$i++){
//            $t1  = mktime(0, 0, 0, date("m")  , date("d")+$i, date("Y"));
//            $tp=date('d \ m \ Y',  $t1);
//            $ts=date('l',$t1);
//            $dat1=array($ts,$tp);
//            array_push($mydate,$dat1);
//        }
//
//        //dd($mydate);
//        $date = date('l\ d \ m');
//        $tomorrow1  = mktime(0, 0, 0, date("m")  , date("d")+1, date("Y"));
//        $tomorrow=date('l \ d \ m \ Y',  $tomorrow1);
//        $time=time_schedule::all()->toArray();
//        $time = array_combine(array_column($time, 'id'), array_column($time, 'time'));
//        $stop = array_reverse($time);
//
//        $schedule= schedule::where('id_doctor',$id)->first();
        $doctors=doctor::all();
        return view('workings.index', compact('doctors'));

    }

}

//'surname',
//        'name',
//        'patronymic',
//        'phone',
//        'doctor',
//        'data',
//        'id_room',
//        'id_time'
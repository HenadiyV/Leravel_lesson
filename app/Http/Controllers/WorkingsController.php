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


        ////////////////////////
           $time=time_schedule::all()->toArray();
            $time = array_combine(array_column($time, 'id'), array_column($time, 'time'));
         //   $stop = array_reverse($time);

////////////////////////////
            $schedule= schedule::where('id_doctor',$id)->first();//

        $mydate=array();
       $monday=array();
       $tuesday=array();
       $wednesday=array();
       $thursday=array();
       $friday=array();
       $saturday=array();
       $sunday=array();
        $new_data=Carbon::now()->format('d-m-Y');
        $temp_patient=array();//foreach($work as $wr)
        for($j=0;$j<7;$j++) {
            $dt = Carbon::now()->addDay($j)->format('d-m-Y');//parse($wr['data'])->format('d-m-Y');
            $p_dt = Carbon::now()->addDay($j)->format('Y-m-d');
            // dd($p_dt);

            $aa = Carbon::parse($dt)->format('l');
            $bb = Carbon::parse($dt)->formatLocalized('%A');
//dd($work);
            $t_date = array($bb, $aa, $dt);
            array_push($mydate, $t_date);

            if($aa == 'Monday') {

                $temp_monday = array();
                $work_mo = patient::where('id_doctor', $id)->where('data', $p_dt)->get();

                if(count($work_mo) > 0) {
                    foreach($work_mo as $wr) {
                        $p_id_time = $wr->id_time;
                        $p_time = $wr->time;
                        $p_temp = array($p_id_time, $p_time);
                        array_push($temp_monday, $p_temp);

                    }
                }

                for($i = $schedule->id_startMonday; $i < $schedule->id_stopMonday; $i++) {
                    $result = true;
                    if(count($temp_monday) > 0) {
                        foreach($temp_monday as $t_s) {
                            if($t_s[0] == $i) {
                                $result = false;
                                break;
                            }
                        }
                    }
                    if($result) {
                        $id_time_mo = $i;

                        $temp_time_mo = $time[$i];

                        $t_mo = array($id_time_mo, $temp_time_mo);
                        array_push($monday, $t_mo);
                    }
                }

            }

            if($aa == 'Tuesday') {
                // dd($aa);
                $temp_tuesday = array();
                $work_tu = patient::where('id_doctor', $id)->where('data', $p_dt)->get();

                if(count($work_tu) > 0) {
                    foreach($work_tu as $wr) {
                        $p_id_time = $wr->id_time;
                        $p_time = $wr->time;
                        $p_temp = array($p_id_time, $p_time);
                        array_push($temp_tuesday, $p_temp);

                    }
                }
                for($i = $schedule->id_startTuesday; $i < $schedule->id_stopTuesday; $i++) {
                    $result = true;
                    if(count($temp_tuesday) > 0) {
                        foreach($temp_tuesday as $t_s) {
                            if($t_s[0] == $i) {
                                $result = false;
                                break;
                            }
                        }
                    }
                    if($result) {
                        $id_time_tu = $i;

                        $temp_time_tu = $time[$i];

                        $t_tu = array($id_time_tu, $temp_time_tu);
                        array_push($tuesday, $t_tu);
                    }
                }
            }
            if($aa == 'Wednesday') {

                $temp_wednesday = array();
                $work_we = patient::where('id_doctor', $id)->where('data', $p_dt)->get();

                if(count($work_we) > 0) {
                    foreach($work_we as $wr) {
                        $p_id_time = $wr->id_time;
                        $p_time = $wr->time;
                        $p_temp = array($p_id_time, $p_time);
                        array_push($temp_wednesday, $p_temp);

                    }
                }
                for($i = $schedule->id_startWednesday; $i < $schedule->id_stopWednesday; $i++) {
                    $result = true;
                    if(count($temp_wednesday) > 0) {
                        foreach($temp_wednesday as $t_s) {
                            if($t_s[0] == $i) {
                                $result = false;
                                break;
                            }
                        }
                    }
                    if($result) {
                        $id_time_we = $i;

                        $temp_time_we = $time[$i];

                        $t_we = array($id_time_we, $temp_time_we);
                        array_push($wednesday, $t_we);
                    }
                }
            }
            if($aa == 'Thursday') {
                $work_th = patient::where('id_doctor', $id)->where('data', $p_dt)->get();
                $temp_thursday = array();
                if(count($work_th) > 0) {
                    foreach($work_th as $wr) {
                        $p_id_time = $wr->id_time;
                        $p_time = $wr->time;
                        $p_temp = array($p_id_time, $p_time);
                        array_push($temp_thursday, $p_temp);

                    }
                }
                for($i = $schedule->id_startThursday; $i < $schedule->id_stopThursday; $i++) {
                    $result = true;
                    if(count($temp_thursday) > 0) {
                        foreach($temp_thursday as $t_s) {
                            if($t_s[0] == $i) {
                                $result = false;
                                break;
                            }
                        }
                    }
                    if($result) {
                        $id_time_th = $i;

                        $temp_time_th = $time[$i];

                        $t_th = array($id_time_th, $temp_time_th);
                        array_push($thursday, $t_th);
                    }
                }
            }
            if($aa == 'Friday') {
                $work_fr = patient::where('id_doctor', $id)->where('data', $p_dt)->get();
                $temp_friday = array();
                if(count($work_fr) > 0) {
                    foreach($work_fr as $wr) {
                        $p_id_time = $wr->id_time;
                        $p_time = $wr->time;
                        $p_temp = array($p_id_time, $p_time);
                        array_push($temp_friday, $p_temp);
                    }
                }
                for($i = $schedule->id_startFriday; $i < $schedule->id_stopFriday; $i++) {
                    $result = true;
                    if(count($temp_friday) > 0) {
                        foreach($temp_friday as $t_s) {
                            if($t_s[0] == $i) {
                                $result = false;
                                break;
                            }
                        }
                    }
                    if($result) {
                        $id_time_fr = $i;

                        $temp_time_fr = $time[$i];

                        $t_fr = array($id_time_fr, $temp_time_fr);
                        array_push($friday, $t_fr);
                    }


                }
            }
            if($aa == 'Saturday') {
                $work_sa = patient::where('id_doctor', $id)->where('data', $p_dt)->get();

                $temp_saturday = array();
                if(count($work_sa) > 0) {

                    foreach($work_sa as $wr) {
                        $p_id_time = $wr->id_time;
                        $p_time = $wr->time;
                        $p_temp = array($p_id_time, $p_time);
                        array_push($temp_saturday, $p_temp);

                    }
                }

                for($i = $schedule->id_startSaturday; $i < $schedule->id_stopSaturday; $i++) {
                    $result = true;
                    if(count($temp_saturday) > 0) {
                        foreach($temp_saturday as $t_s) {
                            if($t_s[0] == $i) {


                                $result = false;
                                break;
                            }
                        }
                    }
                    if($result) {
                        $id_time_sa = $i;

                        $temp_time_sa = $time[$i];

                        $t_sa = array($id_time_sa, $temp_time_sa);
                        array_push($saturday, $t_sa);
                    }

                }
            }
            if($aa == 'Sunday') {
                $work_su = patient::where('id_doctor', $id)->where('data', $p_dt)->get();
                $temp_sunday = array();
                if(count($work_su) > 0) {

                    foreach($work_su as $wr) {
                        $p_id_time = $wr->id_time;
                        $p_time = $wr->time;
                        $p_temp = array($p_id_time, $p_time);
                        array_push($temp_sunday, $p_temp);

                    }
                }
                for($i = $schedule->id_startSunday; $i <= $schedule->id_stopSunday; $i++) {
                    $result = true;
                    if(count($temp_sunday) > 0) {
                        foreach($temp_sunday as $t_s) {
                            if($t_s[0] == $i) {
                                $result = false;

                                break;
                            }
                        }
                    }
                    if($result) {
                        $id_time_su = $i;

                        $temp_time_su = $time[$i];

                        $t_su = array($id_time_su, $temp_time_su);
                        array_push($sunday, $t_su);
                    }

                }
            }
        }
                    $doctors = doctor::where('id', $id)->first();

                    return view('workings.singUpDoctor', compact('doctors', 'schedule', 'mydate', 'monday','tuesday','wednesday','thursday','friday','saturday','sunday'));
                }
    public function singUP(Request $request){


        $time1=$request['id_time'];
        $time2=$request['time'];
        $time =array($time1,$time2) ;
        $data=$request['data'];
        $profile=doctor::where('id',$request['schedule'])->first();
        $schedule=schedule::where('id',$request['schedule'])->first();

        return view('workings.singUpPatient ', compact('schedule','time','data','profile'));
    }
    public function save(Request $request){
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

     $patient->save();
        $doctors=doctor::all();
        return view('workings.index', compact('doctors'));

    }
}
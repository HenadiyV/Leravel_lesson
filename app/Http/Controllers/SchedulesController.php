<?php

namespace App\Http\Controllers;

use App\doctor;
use App\schedule;
use App\time_schedule;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class SchedulesController extends Controller
{
    public function index()
    {

$doctors=doctor::all();

        return view('admin.schedules.index', compact('doctors'));

    }

    public function show($doctor){

        $time=time_schedule::all()->toArray();
//        $date = date('l\ d \ m');
//        $tomorrow1  = mktime(0, 0, 0, date("m")  , date("d")+1, date("Y"));
//        $tomorrow=date('l \ d \ m \ Y',  $tomorrow1);
//        $schedule= schedule::where('id_doctor',$doctor)->first();
        $schedule= schedule::where('id_doctor',$doctor)->first();

        $time = array_combine(array_column($time, 'id'), array_column($time, 'time'));
        $stop = array_reverse($time);
        $doctors=doctor::where('id',$doctor)->first();
        return view('admin.schedules.doctorSchedule', compact('schedule','doctors','time','stop','date'));
    }

    public function create()
    {
//        $year=0;
//        $month=0;
//        $day=0;
//        $tz=0;
        //$stop=time_schedule::all()->reverse();
//Carbon::createFromDate($year, $month, $day);
        //$date = Carbon::now();
        $doctors=doctor::where('id_schedule','=',null)->get();

        $time=time_schedule::all();

        $stop=$time->reverse();

        $date = Carbon::today()->toDateString();

        return view('admin.schedules.form',compact('doctors','date','time','stop'));
    }

    public function store(Request $request)
    {
       // dd($request);
       $this->validate($request, [
//           'id_startMonday'=>'required',
//           'id_stopMonday'=>'required',
//           'id_startTuesday'=>'required',
//           'id_stopTuesday'=>'required',
//           'id_startWednesday'=>'required',
//           'id_stopWednesday'=>'required',
//           'id_startThursday'=>'required',
//           'id_stopThursday'=>'required',
//           'id_startFriday'=>'required',
//           'id_stopFriday'=>'required',
//           'id_startSaturday'=>'required',
//           'id_stopSaturday'=>'required',
//           'id_startSunday'=>'required',
//           'id_stopSunday'=>'required',
         // 'doctor'=> 'required|integer',
           'id_doctor'=> 'required|integer'
      ]);
       $request['doctor']=$request['id_doctor'];

        schedule::create($request ->all());
        $id_max=schedule::max('id');

doctor::where('id',$request['id_doctor'])->update(['id_schedule'=>$id_max]);

        return redirect()->route('schedules.index');
    }

    public function edit(schedule $schedule)
    {
        $entity = $schedule;
      //dd($schedule);
        $doctors=doctor::find($schedule['id_doctor']);
        $time = time_schedule::all()->toArray();
        $stop = array_reverse($time);

        $date = Carbon::today()->toDateString();
      // dd($schedule);
       // $schedule= schedule::where('id_doctor',$doctor)->first();
//dd($doctors);
      // $time=schedule::find($schedule->id_doctor);
//dd($time);
    // $stop=schedule::where('id_doctor',$schedule['id_doctor']);

        return view('admin.schedules.edit_form', compact('entity','doctors','time','stop','date'));
    }

    public function update(Request $request, schedule $schedule)
    {
//        echo "1121212";
//        die;
//        print_r($request->all());
//        die;
 //dd($schedule);
   // dd($request);
//        $this->validate($request, [
//
//            'id_doctor'=> 'required|integer'
//        ]);
//        unset($request->_token);
//        schedule::where('id_doctor', $request->id_doctor)->update($request->all());
        $schedule->update($request->all());
//dd($schedule);
        return redirect()->route('schedules.index');
    }
    public function destroy(schedule $schedule)
    {
        doctor::where('id',$schedule['id_doctor'])->update(['id_schedule'=>null]);

        $schedule->delete();

        return redirect()->route('schedules.index');
    }
}

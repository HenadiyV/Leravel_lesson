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
       $date = date('l\ d \ m');

        $schedule= schedule::where('id_doctor',$doctor)->first();

        $time = array_combine(array_column($time, 'id'), array_column($time, 'time'));
        $stop = array_reverse($time);
        $doctors=doctor::where('id',$doctor)->first();
        return view('admin.schedules.doctorSchedule', compact('schedule','doctors','time','stop','date'));
    }

    public function create()
    {

        $doctors=doctor::where('id_schedule','=',null)->get();

        $time=time_schedule::all();

        $stop=$time->reverse();

        $date = Carbon::today()->toDateString();

        return view('admin.schedules.form',compact('doctors','date','time','stop'));
    }

    public function store(Request $request)
    {

       $this->validate($request, [

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

        $doctors=doctor::find($schedule['id_doctor']);
        $time = time_schedule::all()->toArray();
        $stop = array_reverse($time);

        $date = Carbon::today()->toDateString();


        return view('admin.schedules.edit_form', compact('entity','doctors','time','stop','date'));
    }

    public function update(Request $request, schedule $schedule)
    {

        $schedule->update($request->all());

        return redirect()->route('schedules.index');
    }
    public function destroy(schedule $schedule)
    {
        doctor::where('id',$schedule['id_doctor'])->update(['id_schedule'=>null]);

        $schedule->delete();

        return redirect()->route('schedules.index');
    }
}

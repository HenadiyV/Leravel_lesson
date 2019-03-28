<?php

namespace App\Http\Controllers;

use App\doctor;
use App\patient;
use App\schedule;
use App\time_schedule;
use Illuminate\Http\Request;

class PatientsController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
       // $patients = patient::all();'patients',

$doctors=doctor::all();
        return view('admin.patients.index', compact('doctors'));

    }
    public function singUP($doctor,$data,$time){
//        $patien=patient::
        dd($doctor);
    }
    public function myDate(){
    for($i=0;$i<6;$i++){
        $t1  = mktime(0, 0, 0, date("m")  , date("d")+$i, date("Y"));
        $tp=date('l \ d \ m \ Y',  $t1);
        $ts=date('l',$t1);
        $dat1=array($ts,$tp);
        $mydate=array($dat1);
    }

    return $mydate;
}
    public function show($id){
       // $date = Carbon::now();
        $mydate=array();
        for($i=1;$i<=7;$i++){
            $t1  = mktime(0, 0, 0, date("m")  , date("d")+$i, date("Y"));
            $tp=date('d \ m \ Y',  $t1);
            $ts=date('l',$t1);
            $dat1=array($ts,$tp);
            array_push($mydate,$dat1);
        }

        //dd($mydate);
        $date = date('l\ d \ m');
        $tomorrow1  = mktime(0, 0, 0, date("m")  , date("d")+1, date("Y"));
        $tomorrow=date('l \ d \ m \ Y',  $tomorrow1);
        $time=time_schedule::all()->toArray();
        $time = array_combine(array_column($time, 'id'), array_column($time, 'time'));
        $stop = array_reverse($time);

       $schedule= schedule::where('id_doctor',$id)->first();// ->orwhere(function ($query){$query->where('monday','1')->where('tuesday','1')->where('wednesday','1')->where('thursday','1')->where('friday','1')->where('saturday','1')->where('sunday','1');})
       // dd($schedule);
        $doctors=doctor::where('id',$id)->first();
        return view('admin.patients.singUpDoctors', compact('doctors','schedule','time','stop','mydate'));
    }

//public function doctorSchedule( $doctor)
//{
//
//    return($schedule);
//}
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('admin.patients.form');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'surname' => 'required'
        ]);

        patient::create($request->all());

        return redirect()->route('patients.index');
    }
    public function edit(patient $patient)
    {
        $entity = $patient;
        return view('admin.patients.form', compact('entity'));
    }
    public function update(Request $request, patient $patient)
    {
        $this->validate($request, [
            'name' => 'required',
            'surname' => 'required'
        ]);
        $patient->update($request->all());

        return redirect()->route('patients.index');
    }
    public function destroy(patient $patient)
    {
        $patient->delete();
        return redirect()->route('patients.index');
    }
}

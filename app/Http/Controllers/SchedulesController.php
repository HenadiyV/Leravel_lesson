<?php

namespace App\Http\Controllers;

use App\schedule;
use Illuminate\Http\Request;

class SchedulesController extends Controller
{
    public function index()
    {
        $schedules = schedule::all();

        return view('admin.schedules.index', compact('schedules'));

    }
    public function create()
    {
        return view('admin.schedules.form');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'day'=> 'required',
            'time'=> 'required',
            'id_doctor'=> 'required'
        ]);

        schedule::create($request->all());

        return redirect()->route('schedules.index');
    }
    public function edit(schedule $schedule)
    {
        $entity = $schedule;
        return view('admin.schedules.form', compact('entity'));
    }
    public function update(Request $request, schedule $schedule)
    {
        $this->validate($request, [
            'day'=> 'required',
            'time'=> 'required',
            'id_doctor'=> 'required'
        ]);
        $schedule->update($request->all());

        return redirect()->route('schedules.index');
    }
    public function destroy(schedule $schedule)
    {
        $schedule->delete();
        return redirect()->route('schedules.index');
    }
}

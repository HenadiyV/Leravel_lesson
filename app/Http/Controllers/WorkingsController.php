<?php

namespace App\Http\Controllers;

use App\working;
use Illuminate\Http\Request;

class WorkingsController extends Controller
{
    public function index()
    {
        $working = working::all();

        return view('admin.workings.index', compact('workings'));

    }
    public function create()
    {
        return view('admin.workings.form');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'id_doctor'=> 'required',
            'id_room'=> 'required',
            'id_schedule'=> 'required',
            'status'=> 'required'
        ]);

        working::create($request->all());

        return redirect()->route('workings.index');
    }
    public function edit(working $working)
    {
        $entity = $working;
        return view('admin.workings.form', compact('entity'));
    }
    public function update(Request $request, working $working)
    {
        $this->validate($request, [
            'id_doctor'=> 'required',
            'id_room'=> 'required',
            'id_schedule'=> 'required',
            'status'=> 'required'
        ]);
        $working->update($request->all());

        return redirect()->route('schedules.index');
    }
    public function destroy(working $working)
    {
        $working->delete();
        return redirect()->route('workings.index');
    }
}

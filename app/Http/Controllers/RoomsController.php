<?php

namespace App\Http\Controllers;

use App\room;
use Illuminate\Http\Request;

class RoomsController extends Controller
{
    public function index()
    {
        $rooms = room::all();

        return view('admin.rooms.index', compact('rooms'));

    }
    public function create()
    {
        return view('admin.rooms.form');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'number_room' => 'required'

        ]);

       room::create($request->all());

        return redirect()->route('rooms.index');
    }
    public function edit(room $room)
    {
        $entity = $room;
        return view('admin.rooms.form', compact('entity'));
    }
    public function update(Request $request,room $room)
    {
        $this->validate($request, [
            'number_room' => 'required'

        ]);
        $room->update($request->all());

        return redirect()->route('rooms.index');
    }
    public function destroy(room $room)
    {
        $room->delete();
        return redirect()->route('rooms.index');
    }
}

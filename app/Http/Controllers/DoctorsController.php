<?php

namespace App\Http\Controllers;

use App\doctor;
use App\profile;
use App\room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;


class DoctorsController extends Controller
{
    public function index()
    {
        $doctors = doctor::all();
//        $profiles = profile::all();
//        $rooms=room::all();
        return view('admin.doctors.index', compact('doctors'));

    }
    public function create()
    {
        $profiles = profile::all();
        $rooms=room::all();
       // dd($rooms);
        return view('admin.doctors.form',compact('profiles','rooms'));
    }
    public function store(Request $request)
    {
       // dd($request);
        $this->validate($request, [
            'surname' => 'required',
            'name' => 'required'
        ]);
        File::makeDirectory('storage/images/', 0777, true, true);

        $item = $request->file('photo');
        $filename = time() . '.' . $item->getClientOriginalExtension();
        $location = 'storage/images/' . $filename;
        $request = $request->all();
        $request['photo'] = 'images/' . $filename;

        Image::make($item)->save($location);
//        $request = $request->all();
//        $request['photo'] = $location;
        doctor::create($request);

        return redirect()->route('doctors.index');
    }
    public function edit(doctor $doctor)
    {

        $entity = $doctor;

        $profiles = profile::all();
        $rooms=room::all();
     //   dd($entity);
        return view('admin.doctors.form', compact('profiles','rooms', 'entity'));
    }
    public function update(Request $request, doctor $doctor)
    {
        Storage::disk('public')->delete($customer->photo);
        $this->validate($request, [
            'surname' => 'required',
            'name' => 'required'
        ]);

        $doctor->update($request->all());

        return redirect()->route('doctors.index');
    }
    public function destroy(doctor $doctor)
    {
        try {
            $doctor->delete();
        } catch (\Exception $e) {
        }
        return redirect()->route('doctors.index');
    }
}

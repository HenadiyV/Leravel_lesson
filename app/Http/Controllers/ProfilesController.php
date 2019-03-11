<?php

namespace App\Http\Controllers;

use App\profile;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function index()
    {
        $profiles = profile::all();

        return view('admin.profiles.index', compact('profiles'));

    }
    public function create()
    {
        return view('admin.profiles.form');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required'
        ]);
        profile::create($request->all());
        return redirect()->route('profiles.index');
    }
    public function edit(profile $profile)
    {
        $entity = $profile;
        return view('admin.profiles.form', compact('entity'));
    }
    public function update(Request $request, profile $profile)
    {
        $this->validate($request, [
            'name' => 'required'

        ]);
        $profile->update($request->all());

        return redirect()->route('profiles.index');
    }
    public function destroy(profile $profile)
    {
        $profile->delete();
        return redirect()->route('profiles.index');
    }
}

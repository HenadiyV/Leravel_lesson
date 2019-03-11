<?php

namespace App\Http\Controllers;

use App\patient;
use Illuminate\Http\Request;

class PatientsController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $patients = patient::all();

        return view('admin.patients.index', compact('patients'));

    }

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

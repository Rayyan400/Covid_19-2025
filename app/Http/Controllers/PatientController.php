<?php

namespace App\Http\Controllers;

use App\Models\Patient; // Correct import statement
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function index()
    {
        $patients = Patient::all();
        return view('Admin.Patient.show', compact('patients'));
    }

    public function create()
    {
        return view('Admin.Patient.create');
    }

    public function store(Request $request)
{
    $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:patients',
        'phone' => 'nullable',
    ]);

    Patient::create($request->all());

    return redirect()->route('patients.index')->with('success', 'Patient created successfully.');
}


        public function show(Patient $patient)
    {
        $patient = Patient::all();
        return view('Admin.Patient.show', compact('patient'));
    }

    public function edit($id)
    {
        $patient = Patient::where('id',$id)->first();
        return view('Admin.Patient.edit',['patient' => $patient]);
    }

    public function update(Request $request, $id)
{
    $patient = Patient::findOrFail($id);  // Retrieve the patient by ID

    $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:patients,email,' . $patient->id,
        'phone' => 'nullable',
    ]);

    $patient->update($request->all());

    return redirect()->route('patients.index')->with('success', 'Patient updated successfully.');
}


    public function destroy(Patient $patient)
    {
        $patient->delete();
        return redirect()->route('patients.index')->with('success', 'Patient deleted successfully.');
    }
}

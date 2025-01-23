<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Patient; // Correct import statement

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

    Patient::insert([
        'name'=>$request->name,
        'email'=>$request->email,
        'phone'=>$request->phone,
    ]);
    return redirect()->route('patients.index');
}


        public function show(Patient $patient)
    {
        // $patient = Patient::all();
        // return view('Admin.Patient.show', compact('patient'));
    }

    public function edit($id)
    {
        $patients = Patient::find($id);
        return view('Admin.Patient.edit',['patient' => $patients]);
    }

    public function update(Request $request,string $id)
{
    $patient = Patient::findOrFail($id);  // Retrieve the patient by ID

    $request->validate([
        'name' => 'required',
        'email' => 'required',
        'phone' => 'nullable',
    ]);

    $patient->update($request->all());

    return redirect()->route('patients.index')->with('success', 'Patient updated successfully.');
}


    public function destroy(string $id)
    {
        // Patient::table('patients')->where('id' , $id)->delete();
        // return redirect()->route('patients.index');

        $Patient = DB::table('patients')->where('id' , $id)->delete();
        return redirect()->route('patients.index');
    }
}

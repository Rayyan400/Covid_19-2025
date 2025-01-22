@extends('Admin.index')

@section('content')
    <h1>Patient Details</h1>

    <div>
        <strong>Name:</strong> {{$patient->name}}
    </div>
    <div>
        <strong>Email:</strong> {{$patient->email}}
    </div>
    <div>
        <strong>Phone:</strong> {{$patient->phone}}
    </div>

    <a href="{{ route('patients.edit', $patient->id) }}">Edit Patient</a>
    <form action="{{ route('patients.destroy', $patient->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" onclick="return confirm('Are you sure you want to delete this patient?');">Delete Patient</button>
    </form>
    <br>
    <a href="{{ route('patients.index') }}">Back to Patients List</a>
@endsection
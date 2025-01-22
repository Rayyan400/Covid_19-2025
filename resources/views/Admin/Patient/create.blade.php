@extends('Admin.index')
@section('content')
    <h1>Add Patient</h1>

   
    <form action="{{route('patient.store')}}" method ="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" value="{{ old('name') }}" required>
        
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="{{ old('email') }}" required>
        </div>
        <div>
            <label for="phone">Phone:</label>
            <input type="text" name="phone" id="phone" value="{{ old('phone') }}">
        </div>
        <button type="submit">Add Patient</button>
    </form>

    <a href="{{route('patients.index')}}">Back to Patients List</a>
@endsection
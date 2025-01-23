@extends('Admin.index')

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif 
<div class="container">
    <div class="row">
        <div class="col-12">      
            <div class="card-header text-center">
                <h3 class="text-primary">Edit Patient</h3>
              </div>
              <div class="card-body">
                <form action="{{ route('patients.update', $patient->id) }}" method="post" enctype="multipart/form-data">
                      @csrf
                      @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Name:</label>
                <input type="text" name="name" id="name" value="{{ $patient->name}}" class="form-control" required>
            </div>
            <div class="mb-3">

                <label for="email" class="form-label">Email:</label>
                <input type="email" name="email" id="email" value="{{$patient->email }}" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone:</label>
                <input type="text" name="phone" id="phone" value="{{$patient->phone }}" class="form-control">
            </div>
        <button type="submit" class="btn btn-success">Update Patient</button>
        
        <a href="{{ route('patients.index') }}">Back to Patients List</a>
            </form>
         </div>
    
        </div>
    </div>
</div>
@endsection
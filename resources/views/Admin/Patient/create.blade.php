@extends('Admin.index')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card mt-4">
                <div class="card-header text-center">
                    <h3 class="text-primary">Add - Patient</h3>
                  </div>
                  <div class="card-body">

                      <form action="{{route('patients.store')}}" method ="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
            <label for="n" class="form-label">Name:</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name">
            
        </div>
        <div class="mb-3">
            <label for="e" class="form-label">Email:</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email">
        </div>
        <div class="mb-3">
            <label for="ph" class="form-label">Phone:</label>
            <input type="number" class="form-control" name="phone" id="phone" placeholder="Enter Phone number">
        </div>
        <button type="submit" class="btn btn-primary">Add Patient</button>
    </form>
</div>
            </div>
        </div>
    </div>
</div>

@endsection
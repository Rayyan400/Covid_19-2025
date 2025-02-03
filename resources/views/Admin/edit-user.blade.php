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
                <form action="{{ route('users.update', $user->id) }}" method="put" enctype="multipart/form-data">
                      @csrf
                      @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Name:</label>
                <input type="text" name="name" id="name" value="{{ $user->name}}" class="form-control" required>
            </div>
            <div class="mb-3">

                <label for="email" class="form-label">Email:</label>
                <input type="email" name="email" id="email" value="{{$user->email }}" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="role" class="form-label">Role:</label>
                <input type="text" name="role" id="role" value="{{$user->role }}" class="form-control" readonly>
            </div>
        <button type="submit" class="btn btn-success">Update User</button>
        
        <a href="{{ route('users.list') }}">Back to User List</a>
            </form>
         </div>
    
        </div>
    </div>
</div>
@endsection
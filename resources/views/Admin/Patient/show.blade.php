@extends('Admin.index')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card-header text-center">
                    <h3 class="text-primary">Patient Details</h3>
                </div>
                <table class="table text-center table-bordered table-striped">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Action</th>
                        <th>Action</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($patients as $data)
                    <tr>
                        <td>{{$data->id}}</td>
                        <td>{{$data->name}}</td>
                        <td>{{$data->email}}</td>
                        <td>{{$data->phone}}</td>
                        <td><a href="" class="btn btn-primary">View</a></td>
                        <td><a href="{{route('patients.edit', $data->id)}}" class="btn btn-success">Edit</a></td>
                        <form action="{{route('patients.destroy',$data->id)}}"  method="post">
                        @csrf
                        @method('Delete')
                        <td><button type="submit" class="btn btn-danger">Delete</button></td>
                        </form>
                    </tr>    
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
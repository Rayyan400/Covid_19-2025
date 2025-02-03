@extends('Admin.index')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card-header text-center">
                <h3 class="text-primary">Users Details</h3>
            </div>
            <table class="table text-center table-bordered table-striped">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Password</th>
                    <th>Action</th>
                    <th>Action</th>
                </tr>
            @foreach ($users as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->email}}</td>
                    <td>{{$item->role}}</td>
                    <td class="text-justify">{{$item->password}}</td>
                    {{-- <td><a href="" class="btn btn-primary">View</a></td> --}}
                    <td><a href="{{route('users.edit', $item->id)}}" class="btn btn-success">Edit</a></td>
                    <form action="{{route('users.delete', $item->id)}}"  method="delete">
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
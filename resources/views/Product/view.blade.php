@extends('Admin.index')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card-header text-center">
                    <h3 class="text-primary">Products Details</h3>
                </div>
                <table class="table text-center table-bordered table-striped">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Action</th>
                        <th>Action</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($products as $pro)
                    <tr>
                        <td>{{$pro->id}}</td>
                        <td>{{$pro->name}}</td>
                        <td>{{$pro->price}}</td>
                        <td>{{$pro->description}}</td>
                        <td><img src="{{asset('storage/'.$pro->image)}}" alt="" style="height: 70px; width: 200px; object-fit:contain"></td>
                        <td><a href="" class="btn btn-primary">View</a></td>
                        <td><a href="{{route('product.edit', $pro->id)}}" class="btn btn-success">Edit</a></td>
                        <form action="{{route('product.destroy', $pro->id)}}" method="post">
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
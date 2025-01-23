@extends('Admin.index')
@section('content')
<div class="container">
    <div class="row justify-content-center">
      <div class="col-8">
        <div class="card mt-4">
          <div class="card-header text-center">
            <h3 class="text-primary">Product - Edit</h3>
          </div>
          <div class="card-body">
            <form action="{{route('product.update', $product->id)}}" method="post" enctype="multipart/form-data">
              @csrf
              @method('PATCH')
              <div class="mb-3">
                <label for="n" class="form-label">Name</label>
                <input type="text" name="name" value="{{$product->name}}" class="form-control" id="n" required>
              </div>
              <div class="mb-3">
                <label for="p" class="form-label">Price</label>
                <input type="number" name="price" value="{{$product->price}}" class="form-control" id="p" required>
              </div>
              <div class="mb-3">
                <label for="des" class="form-label">Description</label>
                <input type="text" name="description" value="{{$product->description}}" class="form-control" id="des" required>
              </div>
              <div class="mb-3">
                <label for="i" class="form-label">Image</label>
                <input class="form-control" type="file" name="file" value="{{$product->image}}" id="i">
              </div>
              <div class="mt-2">
                <button class="btn btn-primary">Save</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
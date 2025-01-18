  @extends('Admin.index')
@section('content')
<div class="container">
    <div class="row justify-content-center">
      <div class="col-8">
        <div class="card mt-4">
          <div class="card-header text-center">
            <h3 class="text-primary">Product - Insert</h3>
          </div>
          <div class="card-body">
            <form action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
              @csrf
              <div class="mb-3">
                <label for="n" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="n" placeholder="Enter Name">
              </div>
              <div class="mb-3">
                <label for="p" class="form-label">Price</label>
                <input type="number" name="price" class="form-control" id="p" placeholder="Enter Price">
              </div>
              <div class="mb-3">
                <label for="des" class="form-label">Description</label>
                <input type="text" name="description" class="form-control" id="des" placeholder="Enter Description">
              </div>
              <div class="mb-3">
                <label for="i" class="form-label">Image</label>
                <input class="form-control" type="file" name="file" id="i">
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
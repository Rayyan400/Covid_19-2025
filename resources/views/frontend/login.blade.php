@extends('frontend.index')
@section('contant')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card" style="margin-top: 180px;margin-bottom:100px;">
          <div class="card-header text-center">
            <h3 class="text-primary">Login</h3>
          </div>
          <div class="card-body">
            <form action="{{route('user.check')}}" method="POST">
              @csrf
              <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email" required>
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Enter your password" required>
              </div>
              <div class="form-check mb-3">
                <input type="checkbox" class="form-check-input" id="rememberMe">
                <label class="form-check-label" for="rememberMe">Remember me</label>
              </div>
              <div class="d-grid">
                <button type="submit" class="btn btn-primary">Login</button>
              </div>
            </form>
          </div>
          <div class="card-footer text-center">
            <p>Don't have an account? <a href="{{route('user.form')}}">Sign up here</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card" style="margin-top: 150px">
          <div class="card-header text-center">
            <h3 class="text-primary">Signup</h3>
          </div>
          <div class="card-body">
            <form action="{{route('user.store')}}" method="post">
              @csrf
              <div class="mb-3">
                <label for="fullName" class="form-label">Full Name</label>
                <input type="text" name="name" class="form-control" id="fullName" placeholder="Enter your full name" required>
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email" required>
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Enter your password" required>
              </div>
              <div class="mb-3">
                <label for="confirmPassword" class="form-label">Confirm Password</label>
                <input type="password" name="password_confirmation" class="form-control" id="confirmPassword" placeholder="Confirm your password" required>
              </div>
              <div class="d-grid">
                <button type="submit" class="btn btn-primary">Sign Up</button>
              </div>
            </form>
          </div>
          <div class="card-footer text-center">
            <p>Already have an account? <a href="{{route('user.login')}}">Login here</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>


<div>
  <div class="card">
    <div class="card-header">
      Login
    </div>
    <div class="card-body">
      <form action="{{ route('login.auth') }}" method="POST">
        @csrf
        
        @error('invalid')
          <div class="alert alert-danger" role="alert">
            {{ $message }}
          </div>
        @enderror
        
        <div class="form-group">
          <label for="email">Email:</label>
          <br>
          <input class="form-control" type="email" name="email" autofocus required value="{{ old('email') }}">
        </div>
        <div class="form-group">
          <label for="password">Password:</label>
          <br>
          <input class="form-control" type="password" name="password" required>
        </div>
        <div class="form-group">
          <button class="btn btn-danger" type="reset">Clear</button>
          <button class="btn btn-success" type="submit">Submit</button>
        </div>
        <div class="form-group">
          <a class="btn btn-primary" href="{{ route('register.form') }}" role="button">Create New Account</a>
        </div>
      </form>
    </div>
  </div>
</div>
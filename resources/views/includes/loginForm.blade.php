<div>
  <form action="{{ route('login.auth') }}" method="POST">
    @csrf
    
    @error('invalid')
      <div style="background-color:#ffc2c2; padding:8px; margin-bottom:5px; border-radius:4px">{{ $message }}</div>
    @enderror
    
    <div>
      <label for="email">Email:</label>
      <br>
      <input type="email" name="email" autofocus required value="{{ old('email') }}">
    </div>
    <br>
    <div>
      <label for="password">Password:</label>
      <br>
      <input type="password" name="password" required>
    </div>
    <br>
    <div>
      <button type="reset" style="background-color:red; color:white; padding:5px">Clear</button>
      <button type="submit" style="background-color:green; color:white; padding:5px">Submit</button>
    </div>
  </form>
</div>
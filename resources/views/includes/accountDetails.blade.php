<div>
  <h1>Dashboard</h1>
  <p>Welcome, {{ Auth::user()->name }}!</p>
  <p>Your role is <span style="background-color:yellow">{{ Auth::user()->role }}</span>.</p>
</div>
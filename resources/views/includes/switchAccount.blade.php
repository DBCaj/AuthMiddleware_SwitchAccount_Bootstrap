<div>
  @if(Auth::user()->role !== 'user')
    <hr>
    <p><b>Switch Account:</b></p>
    <ul>
      @foreach($users as $user)
        <!--Don't render the record of currently logged-in account-->
        @if($user->id !== Auth::id())
          <li>
            <a href="{{ route('switch.account', $user->id) }}" onclick="return confirm('Are you sure you want to switch an account?')">{{ $user->name }}</a>
          </li>
        @endif
      @endforeach
    </ul>
  @endif
</div>
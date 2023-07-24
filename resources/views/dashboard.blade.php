<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Dashboard</title>
</head>
<body>
  <a href="{{ url('/logout') }}" onclick="return confirm('Are you sure you want to sign out?')">Log out</a>
  <br>
  
  @include('includes.accountDetails')
  @include('includes.switchAccount')
</body>
</html>
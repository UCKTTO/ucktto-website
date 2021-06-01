@extends('layout.monster')
@section('content')

<form action="/admin" method="POST" class="login-form w3-animate-opacity">
	@csrf
  <div class="login-container">
    <label for="username"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
        
    <button type="submit">Login</button>
  </div>
</form>
@endsection
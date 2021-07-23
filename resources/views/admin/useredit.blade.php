@extends('layout.adminlayout')
@section('content')
<head>
	<title>UCKTTO | User Profile</title>
</head>

<div class="w3-container">
	<br>
	<div class="card-panel horizontal green lighten-3">
		<h4> Edit User Profile</h4> 
	</div>

		
	<form action="/userprof/{{ $users->id }}" method="POST">
		@method("PUT")
		@csrf
		<label for="username"> Username </label>
		<input type="text" name="username" id="username" placeholder="Enter Username" value="{{ $users->username }}">
		
		<label for="email"> Email </label>	
		<input type="text" name="email" id="email" placeholder="Enter Email" value="{{ $users->email }}">
		<button class="btn waves-effect green darken-4" type="submit">Update</button>	
	
	</form>
	
</div>
	
@endsection

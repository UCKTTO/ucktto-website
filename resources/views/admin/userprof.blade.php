@extends('layout.adminlayout')
@section('content')
<head>
	<title>UCKTTO | User Profile</title>
</head>

<div class="w3-container">
	<br>
	<div class="card-panel horizontal green lighten-3">
		<h4>User Profile</h4> 
		<p>&nbsp&nbsp&nbsp&nbsp&nbspUser Information</p>
	</div>

	<div>@foreach($users as $user)
			<a href="/userprof/{{$user->id}}/edit" class="btn waves-effect waves-light green darken-4">Edit<i class="material-icons right">edit</i></a><br><br>
		@endforeach
		

	<table>
		<tr>
			<td>Username</td>
			<td>@foreach($users as $user)
					{{ $user->username }} <br><br>
				@endforeach</td>
		</tr>
		<tr>
			<td>Email</td>
			<td>@foreach($users as $user)
					{{ $user->email }} <br><br>
				@endforeach</td>
		</tr>
	</table>


	<div class="card-panel horizontal green lighten-3">
		<h4>Change Password</h4>
	</div>

	<div class="card-panel">
		<form action="/userprof" method="POST">
			@csrf
			@foreach ($errors->all() as $error)
                <p class="text-danger">{{ $error }}</p>
            @endforeach 
			<label for="password">Current Password</label>
			<input type="password" name="current_password" id="current_password" autocomplete="current-password">

			<label for="password">New Password</label>
			<input type="password" name="new_password" id="new_password" autocomplete="current-password">
			
			<label for="password">Confirm New Password</label>
			<input type="password" name="new_confirm_password" id="new_confirm_password" autocomplete="current-password">

			<button class="btn waves-light green darken-4" type="submit">Update Password</button>
		</form>
	</div>
</div>
	
@endsection
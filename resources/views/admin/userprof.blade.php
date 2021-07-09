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

	<div>
		<a href="" class="btn waves-effect waves-light green darken-4">Edit<i class="material-icons right">edit</i></a><br><br>

	<table>
		<tr>
			<td>Username</td>
			<td>admin</td>
		</tr>
		<tr>
			<td>Email</td>
			<td>admin@test.com</td>
		</tr>
	</table>
</div>
	
@endsection
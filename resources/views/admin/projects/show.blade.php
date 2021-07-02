@extends('layout.adminlayout')
@section('content')

<head>
	<title>UCKTTO | Projects</title>
</head>


<div class="w3-container">
	<br><br>
	<div class="card-panel horizontal center">
		<h4>Project</h4>
	</div>
	<div>
		<a href="/projects/{{ $projects->id }}/edit" class="btn waves-effect waves-light">Edit Project<i class="material-icons right">edit</i></a><br><br>

	<form action="/projects/{{ $projects->id }}" method="POST">
		@csrf
		@method('DELETE')
		<button  class="btn waves-effect waves-light red"type="submit" name="action">DELETE
				<i class="material-icons right">delete</i>
			</button>

	</form>

	<div class="row">
		<div class="col s12">
			<table>
				<tr>
					<td>ID: {{ $projects->id }}</td>
					<td>College:  {{ $projects->college }}</td>
					<td>Department: {{ $projects->department }}</td>
				</tr>
			</table>

			<table>
				<tr>
					<td>Title: {{ $projects->title }}</td>
				</tr>
			</table>

			<table>
				<tr>
					<td>Author/s: 	<br><br>
						{{ $projects->author1 }} <br>
						{{ $projects->author2 }} <br>
						{{ $projects->author3 }} <br>
						{{ $projects->author4 }} <br>
						{{ $projects->author5 }} <br>
						{{ $projects->author6 }} <br>
					</td>
					<td>
						Researchers Contact Details: <br><br>
						{{ $projects->email1}} <br>
						{{ $projects->email2}} <br>
						{{ $projects->email3}} <br>
						{{ $projects->email4}} <br>
						{{ $projects->email5}} <br>
						{{ $projects->email6}} <br>
					</td>
					<td><br><br>
						{{ $projects->phonenumber1}}<br>
						{{ $projects->phonenumber2}}<br>
						{{ $projects->phonenumber3}}<br>
						{{ $projects->phonenumber4}}<br>
						{{ $projects->phonenumber5}}<br>
						{{ $projects->phonenumber6}}<br>
					</td>
				</tr>
			</table>

			<table>
				<tr>
					<td>Adviser: {{ $projects->adviser}}</td>
					<td>Date: {{ $projects->date}}</td>
				</tr>
			</table>

			<table>
				<tr>
					<td>Description: <br> {{ $projects->description}}</td>
				</tr>
			</table>
				
			<table>
				<tr>
					<td>Possible Industry Partners: {{ $projects->pip}}</td>
					<td>Possible Industry Licensee: {{ $projects->pil}}</td>
				</tr>
			</table>

			<table>
				<tr>
					<td>Inventor/Team Status: <br> {{ $projects->a}}</td>
					<td>Technology Readiness: <br> {{ $projects->b}}</td>
					<td>Development Resources: <br> {{ $projects->c}}</td>
					<td>Intellectual Property: <br> {{ $projects->d}}</td>
					<td>Business Strategy: <br> {{ $projects->e}}</td>
					<td>Market Fit: <br> {{ $projects->f}}</td>
				</tr>
			</table>

			<table>
				<tr>
					<td>Overall Score:<br> {{ $projects->overall}}</td>
					<td>Action: <br>{{ $projects->action}}</td>
					<td>For IP Registration: <br> {{ $projects->fipr}}</td>
				</tr>
			</table>
				

		</div>
	</div>
	
</div>
	
@endsection
@extends('layout.adminlayout')
@section('content')

<head>
	<title>UCKTTO | Show Project</title>
</head>


<div class="w3-container">
	<br><br>
	<div class="row">
		<div class="col s6">
			<a href="/projects/{{ $projects->id }}/edit" class="btn waves-effect waves-light green darken-4">Edit Project<i class="material-icons right">edit</i></a><br><br>
		</div>

		<div class="col s6">
			<form action="/projects/{{ $projects->id }}" method="POST">
				@csrf
				@method('DELETE')
				<button  class="btn waves-effect waves-light red"type="submit" name="action">DELETE<i class="material-icons right">delete</i></button>

			</form>
		</div>
	</div>

	<div class="row">
		<div class="col s12">

			<div class="card-panel horizontal center">
				<h3>{{ $projects->title }}</h3>
			</div>

			<div class="card-panel">
				<table>
				<tr>
					<th>College</th>
					<th>Department</th>
					<th>Date</th>
				</tr>
				<tr>
					<td>{{ $projects->college }}</td>
					<td>{{ $projects->department }}</td>
					<td>{{ $projects->date}}</td>
				</tr>
			</table>

			<table>
				<tr>
					<th>Author/s</th>
					<th>Researchers Contact Details</th>
					<th></th>
				</tr>
				<tr>
					<td>{{ $projects->author1 }} <br>
						{{ $projects->author2 }} <br>
						{{ $projects->author3 }} <br>
						{{ $projects->author4 }} <br>
						{{ $projects->author5 }} <br>
						{{ $projects->author6 }} <br>
						{{ $projects->author7 }} <br>
						{{ $projects->author8 }} <br>
						{{ $projects->author9 }} <br>
						{{ $projects->author10 }} <br>
					</td>
					<td>{{ $projects->email1}} <br>
						{{ $projects->email2}} <br>
						{{ $projects->email3}} <br>
						{{ $projects->email4}} <br>
						{{ $projects->email5}} <br>
						{{ $projects->email6}} <br>
						{{ $projects->email7}} <br>
						{{ $projects->email8}} <br>
						{{ $projects->email9}} <br>
						{{ $projects->email10}} <br>
					</td>
					<td>{{ $projects->phonenumber1}}<br>
						{{ $projects->phonenumber2}}<br>
						{{ $projects->phonenumber3}}<br>
						{{ $projects->phonenumber4}}<br>
						{{ $projects->phonenumber5}}<br>
						{{ $projects->phonenumber6}}<br>
						{{ $projects->phonenumber7}}<br>
						{{ $projects->phonenumber8}}<br>
						{{ $projects->phonenumber9}}<br>
						{{ $projects->phonenumber10}}<br>
					</td>
				</tr>
			</table>

			<table>
				<tr>
					<th>Adviser</th>
				</tr>
				<tr>
					<td>{{ $projects->adviser}}</td>
				</tr>
			</table>

			<table>
				<tr>
					<th>Description</th>
				</tr>
				<tr>
					<td>{{ $projects->description}}</td>
				</tr>
			</table>

			<table>
				<tr>
					<th>Possible Industry Partners</th>
					<th>Possible Industry Licensee</th>
				</tr>
				<tr>
					<td>{{ $projects->pip}}</td>
					<td>{{ $projects->pil}}</td>
				</tr>
			</table>

			<table>
				<tr>
					<th>Inventor/Team Status</th>
					<th>Technology Readiness</th>
					<th>Development Resources</th>
					<th>Intellectual Property</th>
					<th>Business Strategy</th>
					<th>Market Fit</th>
				</tr>
				<tr>
					<td>{{ $projects->a}}</td>
					<td>{{ $projects->b}}</td>
					<td>{{ $projects->c}}</td>
					<td>{{ $projects->d}}</td>
					<td>{{ $projects->e}}</td>
					<td>{{ $projects->f}}</td>
				</tr>
			</table>

			<table>
				<tr>
					<th>Overall Score</th>
					<th>Action</th>
					<th>For IP Registration</th>
				</tr>
				<tr>
					<td>{{ $projects->overall}}</td>
					<td>{{ $projects->action}}</td>
					<td>{{ $projects->fipr}}</td>
				</tr>
			</table>

			</div>	
				

		</div>
	</div>
	
</div>
	
@endsection
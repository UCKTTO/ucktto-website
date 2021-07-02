@extends('layout.adminlayout')
@section('content')

<head>
	<title>UCKTTO | Edit Project</title>
</head>


<div class="w3-container">
	<br><br>
	<div class="card-panel horizontal center">
		<h4>Edit Project</h4>
	</div>
	
	<div>
		<form action="/projects/{{ $projects->id }}" method="POST">
			@method('PUT')
			@csrf

			<div class="row">
				<div class="input-field col s6">
				<input placeholder="College" id="college" type="text" name="college" value="{{ $projects->college }}">
				<label for="college"></label>
				</div>

				<div class="input-field col s6">
				<input placeholder="Department" id="department" type="text" name="department" value="{{ $projects->department }}">
				<label for="department"></label>
				</div>

				<div class="input-field col s12">
				<input placeholder="Title" id="title" type="text" name="title" value="{{ $projects->title }}">
				<label for="title"></label>
				</div>
				
				<div class="input-field col s4">
				<input placeholder="Author 1" id="author1" type="text" name="author1" value="{{ $projects->author1 }}">
				<label for="author1"></label>
				</div>

				<div class="input-field col s4">
				<input placeholder="Email" id="email1" type="email" name="email1" value="{{ $projects->email1 }}">
				<label for="email1"></label>
				</div>

				<div class="input-field col s4">
				<input placeholder="Phone Number" id="phonenumber1" type="text" name="phonenumber1" value="{{ $projects->phonenumber1 }}">
				<label for="phonenumber1"></label>
				</div>

				<div class="input-field col s4">
				<input placeholder="Author 2" id="author2" type="text" name="author2" value="{{ $projects->author2 }}">
				<label for="author2"></label>
				</div>

				<div class="input-field col s4">
				<input placeholder="Email" id="email2" type="email" name="email2" value="{{ $projects->email2 }}">
				<label for="email2"></label>
				</div>

				<div class="input-field col s4">
				<input placeholder="Phone Number" id="phonenumber2" type="text" name="phonenumber2" value="{{ $projects->phonenumber2 }}">
				<label for="phonenumber2"></label>
				</div>

				<div class="input-field col s4">
				<input placeholder="Author 3" id="author3" type="text" name="author3" value="{{ $projects->author3 }}">
				<label for="author3"></label>
				</div>

				<div class="input-field col s4">
				<input placeholder="Email" id="email3" type="email" name="email3" value="{{ $projects->email3 }}">
				<label for="email3"></label>
				</div>

				<div class="input-field col s4">
				<input placeholder="Phone Number" id="phonenumber3" type="text" name="phonenumber3" value="{{ $projects->phonenumber3 }}">
				<label for="phonenumber3"></label>
				</div>

				<div class="input-field col s4">
				<input placeholder="Author 4" id="author4" type="text" name="author4" value="{{ $projects->author4 }}">
				<label for="author4"></label>
				</div>

				<div class="input-field col s4">
				<input placeholder="Email" id="email4" type="email" name="email4" value="{{ $projects->email4 }}">
				<label for="email4"></label>
				</div>

				<div class="input-field col s4">
				<input placeholder="Phone Number" id="phonenumber4" type="text" name="phonenumber4" value="{{ $projects->phonenumber4 }}">
				<label for="phonenumber4"></label>
				</div>

				<div class="input-field col s4">
				<input placeholder="Author 5" id="author5" type="text" name="author5" value="{{ $projects->author5 }}">
				<label for="author5"></label>
				</div>

				<div class="input-field col s4">
				<input placeholder="Email" id="email5" type="email" name="email5" value="{{ $projects->email5 }}">
				<label for="email5"></label>
				</div>

				<div class="input-field col s4">
				<input placeholder="Phone Number" id="phonenumber5" type="text" name="phonenumber5" value="{{ $projects->phonenumber5 }}">
				<label for="phonenumber5"></label>
				</div>

				<div class="input-field col s4">
				<input placeholder="Author 6" id="author6" type="text" name="author6" value="{{ $projects->author6 }}">
				<label for="author6"></label>
				</div>

				<div class="input-field col s4">
				<input placeholder="Email" id="email6" type="email" name="email6" value="{{ $projects->email6 }}">
				<label for="email6"></label>
				</div>

				<div class="input-field col s4">
				<input placeholder="Phone Number" id="phonenumber6" type="text" name="phonenumber6" value="{{ $projects->phonenumber6 }}">
				<label for="phonenumber6"></label>
				</div>

				<div class="input-field col s6">
				<input placeholder="Adviser" id="adviser" type="text" name="adviser" value="{{ $projects->adviser }}">
				<label for="adviser"></label>
				</div>

				<div class="input-field col s4">
				<input placeholder="Date" id="Date" type="date" name="date" value="{{ $projects->date }}">
				<label for="date"></label>
				</div>

				<div class="input-field col s12">
				<input placeholder="Description" id="description" type="text" name="description" value="{{ $projects->description }}">
				<label for="description"></label>
				</div>

				<div class="input-field col s6">
				<input placeholder="Possible Industry Partners" id="pip" type="text" name="pip" value="{{ $projects->pip }}">
				<label for="pip"></label>
				</div>

				<div class="input-field col s6">
				<input placeholder="Possible Industry Licensee" id="pil" type="text" name="pil" value="{{ $projects->pil }}">
				<label for="pil"></label>
				</div>

				<div class="input-field col s2">
				<input placeholder="Inventor / Team Status" id="a" type="number" name="a" value="{{ $projects->a }}">
				<label for="a"></label>
				</div>

				<div class="input-field col s2">
				<input placeholder="Technology Readiness" id="b" type="number" name="b" value="{{ $projects->b }}">
				<label for="b"></label>
				</div>

				<div class="input-field col s2">
				<input placeholder="Development Resources" id="c" type="number" name="c" value="{{ $projects->c }}">
				<label for="c"></label>
				</div>

				<div class="input-field col s2">
				<input placeholder="Intellectual Property" id="d" type="number" name="d" value="{{ $projects->d }}">
				<label for="d"></label>
				</div>

				<div class="input-field col s2">
				<input placeholder="Business Strategy" id="e" type="number" name="e" value="{{ $projects->e }}">
				<label for="e"></label>
				</div>

				<div class="input-field col s2">
				<input placeholder="Market Fit" id="f" type="number" name="f" value="{{ $projects->f }}">
				<label for="f"></label>
				</div>

				<div class="input-field col s4">
				<input placeholder="Overall" id="overall" type="number" name="overall" value="{{ $projects->overall }}">
				<label for="overall"></label>
				</div>

				<div class="input-field col s4">
				<input placeholder="Action" id="action" type="text" name="action" value="{{ $projects->action }}">
				<label for="action"></label>
				</div>

				<div class="input-field col s4">
				<input placeholder="For IP Registration" id="fipr" type="text" name="fipr" value="{{ $projects->fipr }}">
				<label for="fipr"></label>
				</div>
			
			</div>
			<div class="center">
			<button  class="btn waves-effect waves-light"type="submit" name="action">Submit
			<i class="material-icons right">send</i>
			</button>
		</div>
		</form>
	</div>
</div>
	
@endsection
@extends('layout.adminlayout')
@section('content')

<head>
	<title>UCKTTO | Show Project</title>
</head>


<div class="w3-container">
	<br><br>
	<div class="row">
		<div class="col s6">
			<a href="/faq/{{ $faqs->id }}/edit" class="btn waves-effect waves-light green darken-4">Edit<i class="material-icons right">edit</i></a><br><br>
		</div>

		<div class="col s6">
			<form action="/faq/{{ $faqs->id }}" method="POST">
				@csrf
				@method('DELETE')
				<button  class="btn waves-effect waves-light red"type="submit" name="action">DELETE<i class="material-icons right">delete</i></button>

			</form>
		</div>
	</div>

	<div class="row">
		<div class="col s12">

			<div class="card-panel">
				<table>
				<tr>
					<th>Question</th>
					<th>Answer</th>
				</tr>
				<tr>
					<td>{{ $faqs->question }}</td>
					<td>{{ $faqs->answer }}</td>
				</tr>
				</table>
			
			</div>	
					

		</div>
	</div>
	
</div>
	
@endsection
@extends('layout.adminlayout')
@section('content')

<head>
	<title>UCKTTO | AFAQ</title>
</head>


<div class="w3-container">
	<br>

	<div class="divider"></div><br><br>
	<div>
		<h4>Edit Frequently Asked Questions</h4>
	
		<form action="/faq/{{ $faqs->id }}" method="POST">
			@method("PUT")
			@csrf
			<label for="question"> Question </label>
			<input type="text" name="question" id="question" placeholder="Enter Question" value="{{ $faqs->question }}">
		
			<label for="answer"> Answer </label>
			<input type="text" name="answer" id="answer" placeholder="Enter Answer" value="{{ $faqs->answer }}">
			<button class="btn waves-effect green darken-4" type="submit">Update</button>
		</form>
	</div>
	
</div>
	
@endsection
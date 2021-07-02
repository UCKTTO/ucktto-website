@extends('layout.adminlayout')
@section('content')

<head>
	<title>UCKTTO | AFAQ</title>
</head>


<div class="w3-container">
	<br>

	<div class="divider"></div><br><br>
	<div>
		<h4>Input Frequently Asked Questions</h4>
		<form action="/admin/faq/{{ $faqs -> id }}" method="POST">
			@method("PUT")
			@csrf

			<label for="question"> Question </label>
			<input name="question" id="question" type="string" placeholder="Enter Question" value='{{ $faqs -> question }}' ></textarea>
		
			<label for="answer"> Answer </label>
			<input name="answer" id="answer" type="string" placeholder="Enter Answer" value='{{ $faqs -> answer }}'></textarea>
			<button class="btn waves-effect" type="submit">UPDATE</button>
		</form>
	</div>
	
</div>
	
@endsection
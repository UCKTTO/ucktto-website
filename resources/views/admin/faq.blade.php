@extends('layout.adminlayout')
@section('content')

<head>
	<title>UCKTTO | AFAQ</title>
</head>


<div class="w3-container">
	<br>
	<div class="green lighten-4">
	<h4>List of Faqs</h4>
		<table>
			<thead>
				<tr>
					<th>ID</th>
					<th>Question</th>
					<th>Answer</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>
						@foreach($faqs as $faq)
			            {{ $faq->id }} <br>
			            @endforeach
					</td>
					<td>
						@foreach($faqs as $faq)
			            {{ $faq->question }} <br>
			            @endforeach
					</td>
					<td>
						@foreach($faqs as $faq)
              			{{ $faq->answer }} <br>
              			@endforeach
					</td>
				</tr>
			</tbody>
		</table>
	</div>
	<div class="divider"></div><br><br>
	<div>
		<h4>Input Frequently Asked Questions</h4>
		<form action="/admin/faq" method="POST">
			@csrf
			<label for="question"> Question </label>
			<textarea name="question" id="question" placeholder="Enter Question"></textarea>
		
			<label for="answer"> Answer </label>
			<textarea name="answer" id="answer" placeholder="Enter Answer"></textarea>
			<button class="btn waves-effect green darken-4" type="submit">Add</button>
		</form>
	</div>
	
</div>
	
@endsection
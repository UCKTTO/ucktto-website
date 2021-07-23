@extends('layout.adminlayout')
@section('content')

<head>
	<title>UCKTTO | AFAQ</title>
</head>


<div class="w3-container">
	<br><br>
	<table>
			<thead>
				<tr>
					<th>&nbspName&nbsp</th>
					<th>&nbsp&nbsp&nbsp&nbspEmail</th>	
					<th>&nbspSubject&nbsp</th>
					<th>&nbsp&nbsp&nbsp&nbsp&nbsp&nbspMessage&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>@foreach($contacts as $contact)
						{{ $contact->name }} <br><br>
						@endforeach
					</td>

					<td>@foreach($contacts as $contact)
						{{ $contact->email }} <br><br>
						@endforeach
					</td>

					<td>@foreach($contacts as $contact)
						{{ $contact->subject}} <br><br>
						@endforeach
					</td>					

					<td>@foreach($contacts as $contact)
						<a style="text-decoration: underline" href="/projects/{{ $contact->id }}">{{ $contact->message}} <br><br>
						@endforeach
					</td>
				</tr>	
			</tbody>
		</table>
</div>
	
@endsection
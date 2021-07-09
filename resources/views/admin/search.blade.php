@extends('layout.adminlayout')
@section('content')

<head>
	<title>UCKTTO | Search Results</title>
</head>


<div class="w3-container">
	
	@if($files->isNotEmpty())
	<table>
		<tr>
			<th>Date</th>
			<th>Category</th>
			<th>Name</th>
		</tr>
		<tr>
			<td>@foreach($files as $file)
					{{ $files->date }} <br><br>
				@endforeach
			</td>
			
			<td>@foreach($files as $file)
					{{ $files->category }} <br><br>
				@endforeach
			</td>					

			<td>@foreach($files as $file)
					<a style="text-decoration: underline" href="/projects/{{ $title->id }}">{{ $files->name }} <br><br>
				@endforeach
			</td>
		</tr>
	</table>

	@else 
    <div>
        <h2>No projects found</h2>
    </div>
	@endif

</div>
	
@endsection
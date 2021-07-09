@extends('layout.adminlayout')
@section('content')

<head>
	<title>UCKTTO | Search Results</title>
</head>


<div class="w3-container">
	
	@if($projects->isNotEmpty())
	<table>
		<tr>
			<th>College</th>
			<th>Department</th>
			<th>Title</th>
		</tr>
		<tr>
			<td>@foreach($projects as $project)
					{{ $project->college }} <br><br>
				@endforeach
			</td>
			
			<td>@foreach($projects as $project)
					{{ $project->department }} <br><br>
				@endforeach
			</td>					

			<td>@foreach($projects as $project)
					<a style="text-decoration: underline" href="/projects/{{ $project->id }}">{{ $project->title }} <br><br>
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
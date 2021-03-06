@extends('layout.adminlayout')
@section('content')

<head>
	<title>UCKTTO | Search Results</title>
</head>


<div class="w3-container">
	
	@if($projects->isNotEmpty())
	<table>
		<tr>
			<th>&nbspCollege / Dept</th>
			<th>&nbsp&nbspDate&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th>
			<th>&nbsp&nbsp&nbsp&nbspTitle</th>	
		</tr>
		<tr>
			<td>@foreach($projects as $project)
					{{ $project->college }} <br><br>
				@endforeach
			</td>
			
			<td>@foreach($projects as $project)
					{{ $project->date }} <br><br>
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
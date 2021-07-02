@extends('layout.adminlayout')
@section('content')

<head>
	<title>UCKTTO | Colleges</title>
</head>


<div class="w3-container">
	<br><br>
	<div class="card-panel horizontal center">
		<h4>Colleges and Projects</h4>
	</div>
	<div>
		<button class="btn waves-effect"><a href="/projects/create">ADD</a></button>
		<table>
			<thead>
				<tr>
					<th>ID</th>
					<th>College</th>
					<th>Dept</th>
					<th>Title</th>	
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>@foreach($projects as $project)
						<a style="color: blue" href="/projects/{{ $project->id }}">{{ $project->id }}</a><br><br>
						@endforeach
					</td>

					<td>@foreach($projects as $project)
						{{ $project->college }} <br><br>
						@endforeach
					</td>

					<td>@foreach($projects as $project)
						{{ $project->department }} <br><br>
						@endforeach
					</td>					

					<td>@foreach($projects as $project)
						{{ $project->title }} <br><br>
						@endforeach
					</td>
				</tr>	
			</tbody>
		</table>
	</div>
</div>
	
@endsection
@extends('layout.adminlayout')
@section('content')
<head>
	<title>UCKTTO | Dashboard</title>
</head>

<body>

	<div class="w3-container">
	<table class="striped">
		<thead>
			<tr>Submitted Forms</tr>
			<tr>
			<th>ID</th>
			<th>Category</th>
			<th>Name</th>
			<th></th>
			<th></th>
			</tr>
		</thead>
		<tbody>
			<tr>
			<td>
				@foreach($files as $file)
				{{ $file->id }} <br>
				@endforeach
			</td>
			<td>
				@foreach($files as $file)
				{{ $file->category }} <br>
				@endforeach	
			</td>			
			<td>
				@foreach($files as $file)
				{{ $file->name }} <br>
				@endforeach
			</td>
			<td>
				@foreach($files as $file)
				<a href="{{ $file->file_path }}">Download</a> <br>
				@endforeach
			</td>
			<td>
				@foreach($files as $file)
				<a href="{{ $file->file_path }}" target="_blank">View</a> <br>
				@endforeach
			</td>
			</tr>
		</tbody>
	</table>
	</div>

</section>

@endsection
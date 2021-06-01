@extends('layout.monster')
@section('content')

<div class="container">
	<h3 class="center">Welcome Admin</h3>
	<form action="/logout" method="GET">
            <div class="center">
              <button class="btn waves-effect waves-light green"type="submit" name="action">Logout</button>
            </div>  
    </form>
</div class="container">
	<table class="striped">
		<thead>
			<tr>
				<th>ID</th>
				<!-- <th>Category</th> -->
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
			<!-- <td>
				@foreach($files as $file)
					{{ $file->category }} <br>
				@endforeach	
			</td> -->			
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
<div>
	
</div>

@stop
@extends('layout.adminlayout')
@section('content')
<head>
	<title>UCKTTO | Dashboard</title>
</head>

<body>

	<div class="w3-container">
		<div>
			<form action="/searchdash" method="GET" role="search">
			    @csrf
			    <div class="row">
			    	<div class="input-field col s9">
				        <input type="text" name="search" placeholder="Search" required>
				    </div>
				    <div class="input-field col s1">
				        <button type="submit" class="btn waves-effect waves-light green darken-4">
				               <i class="material-icons">search</i>
				        </button>
			    	</div>
			    	<div class="input-field col s2">
			    		<!-- dropdown content -->
				        <ul id="dropdown1" class="dropdown-content">
							<!-- <li><a href="/datedash">Date</a></li><li class="divider"></li> -->
							<li><a href="/name">Name</a></li><li class="divider"></li>
							<li><a href="/category">Category</a></li><li class="divider"></li>
						</ul>
				      	<a class="dropdown-trigger" href="#!" data-target="dropdown1"><div class="btn green darken-4">Sort By<i class="material-icons right">arrow_drop_down</i></div></a>
				      	
			    	</div>
			    </div>   
			</form>
		</div>

	<table class="striped">
		<thead>
			<tr>Submitted Forms</tr>
			<tr>
			<th>Date</th>
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
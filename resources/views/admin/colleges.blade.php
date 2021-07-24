@extends('layout.adminlayout')
@section('content')

<head>
	<title>UCKTTO | Projects</title>
</head>


<div class="w3-container">
	<br>
	<div>
		<form action="/search" method="GET" role="search">
		    @csrf
		    <div class="row">
		    	<div class="input-field col s7">
			        <input type="text" name="search" placeholder="Search Projects" required>
			    </div>
			    <div class="input-field col s1">
			        <button type="submit" class="btn waves-effect waves-light green darken-4">
			               <i class="material-icons">search</i>
			        </button>
		    	</div>
		  </form>	
		    	<div class="input-field col s2">
		    		<!-- dropdown content -->
			        <ul id="dropdown1" class="dropdown-content">
						<li><a href="/date">Date</a></li><li class="divider"></li>
						<li><a href="/title">Title</a></li><li class="divider"></li>
						<li><a href="/col">College</a></li><li class="divider"></li>
					</ul>
			      	<a class="dropdown-trigger" href="#!" data-target="dropdown1"><div class="btn green darken-4">Sort By<i class="material-icons right">arrow_drop_down</i></div></a>
			    </div>
			    <div class="input-field col s1">
			      	<button class="btn waves-effect green darken-4"><a href="/projects/create">ADD</a></button>
			      	
		    	</div>
		    	<div class="input-field col s1">
			      	        <form action="{{ route('our_backup_database') }}" method="get">
					            <button style="submit" class="btn btn-primary"> download</button>
					        </form>
			      	
		    	</div>
		    </div>   
	


		<table>
			<thead>
				<tr>
					<th>&nbspCollege / Dept</th>
					<th>&nbsp&nbspDate&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th>
					<th>&nbsp&nbsp&nbsp&nbspTitle</th>	
				</tr>
			</thead>
			<tbody>
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
			</tbody>
		</table>
	</div>

	<div>
		{{ $projects->links() }}<br>
	</div>
</div>
	
@endsection
@extends('layout.monster')
@section('content')

<section>
	<div class="container">
		<center><h2>Request for Patent Online</h2></center>
		<br>
	<form action="/application" method="POST" class="">
	@csrf		
		<div class="row">
			<div class="col s12">
				<div class="input-field s12">
					<label for="title">Title of the Work</label>
		    		<input type="text" placeholder="Enter Title" name="title" required>
				</div>
	
				<div class="input-field s12">
					<p><label>IP is Output of: <br>
				      <input class="with-gap" name="outputOf" type="radio" checked />
				      <span>University Funded Research</span>
				    </label></p>
					<p><label>
				      <input class="with-gap" name="outputOf" type="radio"/>
				      <span>Joinly Funded Research</span>
				    </label></p>
					<p><label>
				      <input class="with-gap" name="outputOf" type="radio"/>
				      <span>Grants</span>
				    </label></p>
					<p><label>
				      <input class="with-gap" name="outputOf" type="radio"/>
				      <span>Academic Requirement</span>
				    </label></p>
					<p><label>
				      <input class="with-gap" name="outputOf" type="radio"/>
				      <span>Individual Research</span>
				    </label></p>
					<p><label>
				      <input class="with-gap" name="outputOf" type="radio"/>
				      <span>Others</span> <input type="text" name="Others" placeholder="Please Specify">
				    </label></p>
				</div>	

				<div class="input-field xl4 l4 m4 s4">
					<label>Enter Names of Creators. Note: Alphabetical Order = Equal Participation/Contribution to IP Creation <br>
		    		Non-Alphabetical Order = In Order of Highest to Lowest Degree of Participation/Contribution to IP Creation.</label><br>
			    	<input type="text" name="name" placeholder="Creator Name" required>
			    	<input type="text" name="unit" placeholder="Unit/Office">
			    	<input type="number" name="mobile" placeholder="Contact Number">
			    	<input type="email" name="email" placeholder="Email">
				</div>

				<br>

				<div class="input-field xl4 l4 m4 s4">
					<label>Enter Name of Second Creator</label><br>
			    	<input type="text" name="name" placeholder="Creator Name" required>
			    	<input type="text" name="unit" placeholder="Unit/Office">
			    	<input type="number" name="mobile" placeholder="Contact Number">
			    	<input type="email" name="email" placeholder="Email">
				</div>				
				
				<br>
				<div class="input-field xl4 l4 m4 s4">
					<label>Enter Name Third of Creator</label><br>
			    	<input type="text" name="name" placeholder="Creator Name" required>
			    	<input type="text" name="unit" placeholder="Unit/Office">
			    	<input type="number" name="mobile" placeholder="Contact Number">
			    	<input type="email" name="email" placeholder="Email">
				</div>
				<br>
				<div class="input-field s12">
					<label for="title">Full Name of IP Creator/s Representative</label>
		    		<input type="text" placeholder="Enter Representative" name="representative" required>
				</div>				
				<br>
			    	<a class="waves-effect waves-light btn green" href="/application-patent">NEXT</a>
			</div>
		</div>
	</form>
</section>

@endsection
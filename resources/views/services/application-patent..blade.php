@extends('layout.monster')
@section('content')

<section>
	<div class="container">
		<center><h2>Request for Patent Online</h2></center>
		<br>
	<form action="/application-patent" method="POST" class="">
	@csrf		
		<div class="row">
			<div class="col s12">
				<div class="input-field s12">
					<label for="description">Description of the Invention</label>
		    		<textarea placeholder="Enter Description" name="description" required rows="10" cols="30"></textarea>
				</div>

				<div class="input-field s12">
					<label for="patent">Upload Drawings/Diagrams Here. Attach pdf file only</label><br><br>
		    		<input type="file" name="patent" accept=".pdf"><br><br>
				</div>

				<div class="input-field s12">
					<label for="advantages">Advantages</label>
		    		<textarea placeholder="Enter Advantages of the Invention" name="advantages" required rows="10" cols="30"></textarea><br><br>
				</div>

				<div class="input-field s12">
					<label for="commercial_potential">Commerial Potential</label>
		    		<textarea placeholder="Identify companies or market segments that you think could benefit from your invention/findings" name="commercial_potential" required rows="10" cols="30"></textarea><br>
				</div>
				
				<div class="input-field s12">
					<p><label>Is the work on the invention continuing?<br>
				      <input class="with-gap" name="yesno" type="radio" checked />
				      <span>Yes</span>
				    </label></p>
				    <p><label>
				      <input class="with-gap" name="yesno" type="radio"/>
				      <span>No</span>
				    </label></p>
				</div>	
	
				<div class="input-field s12">
					<label>Have you been in contact with, or do you know of any appropriate industrial companies that may be interested in licensing this technology?</label>
		    		<input type="text" name="company" placeholder="Company">
		    		<input type="text" name="contactPerson" placeholder="Contact Person">
		    		<input type="text" name="contactInfo" placeholder="Contact Information">
				</div>	

				<div class="input-field s12">
					<legend>Invention History</legend>
					<label>Conception of Invention
		    		<input type="date" name="conception"></label><br><br>
				</div>

				<div class="input-field s12">
					<label>First sketches, drawings, description
		    		<input type="date" name="firstsketch"></label><br><br>
				</div>

				<div class="input-field s12">
					<br><br>
					<p><label>Has a model prototype been made?<br>
				      <input class="with-gap" name="yesno" type="radio" checked />
				      <span>Yes</span>
				      <input type="date" name="">
				    </label></p>
				    <p><label>
				      <input class="with-gap" name="yesno" type="radio"/>
				      <span>No</span>
				    </label></p>
				</div>	

				<div class="input-field s12">
					<p><label>Is a publication or other public disclosure planned within 6 months?<br>
				      <input class="with-gap" name="yesno" type="radio" checked />
				      <span>Yes</span>
				      <input type="date" name="">
				    </label></p>
				    <p><label>
				      <input class="with-gap" name="yesno" type="radio"/>
				      <span>No</span>
				    </label></p>
				</div>	
				

				<div class="input-field s12">
					<p><label>If you have published, disclosed, described, or commercialized the inventions outside UC KTTO, please provide dates and details.
				      <input type="date" name=""> <textarea placeholder="Enter Details: (to whom did you disclose, a brief description of the disclosures made)" rows="5" cols="15"></textarea>
				</div>

				<div class="input-field s12">
					<p><label>If you have published, disclosed, described, or commercialized the inventions outside UC KTTO, please provide dates and details.
				      <input type="date" name=""> <textarea placeholder="Enter Details: (to whom did you disclose, a brief description of the disclosures made)" rows="5" cols="15"></textarea>
				</div>

				<div class="input-field s12">
					<p><label for="Keywords">Search Keywords
				      <textarea name="Keywords" placeholder="Please provide a maximum of 10 keywords, synonyms, or commonly used industrial phrases that pertain to your invention to guide us in conducting a prior art search. It is advisable to conduct a preliminary search using patent databases such as Google Patents or Espacenet." rows="10" cols="30"></textarea>
				</div>

				<div class="input-field s12">
					<p><label for="priorart">Prior Art
				      <textarea name="priorart" placeholder="(Please provide any available information on other known technologies that satisfy similar objectives as this technology. Discuss the advantages of this technology over others. Include descriptions of competing technologies and references to web sites, articles, or patents that you are aware of)" rows="10" cols="30"></textarea>
				</div>

				<br>
			    	<a class="waves-effect waves-light btn green" href="/patent">SAVE</a>
			</div>
		</div>
	</form>
</section>

@endsection
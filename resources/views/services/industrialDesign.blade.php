@extends('layout.monster')
@section('content')
<div class="services w3-animate-opacity">
	<h2>INDUSTRIAL DESIGN</h2>
	<div class="def-row">
		<div class="def-container">
			<p>
				An industrial design is the ornamental or aesthetic aspect of an article. Design, in this sense, may be three-dimensional features (shape or surface of an article), or the two-dimensional features (patterns or lines of color). Handicrafts, jewelry, vehicles, appliances - the subject of industrial designs range from fashion to industrial goods.
			</p>
		</div>
	</div>
	<div class="bet-row">
		<div class="bet-column">
			<div class="bet-container">
				<h4 id="ben" style="background-color: white" onclick="replace1()">BENEFITS</h4>
				<h4 id="el" onclick="replace2()">ELIGIBILITY</h4>
				<h4 id="term" onclick="replace3()">TERM OF PROTECTION</h4>

				<div id = "div1" style="display:block">
					<p>
						The owner of a registered industrial design has the right to prevent third parties from making, selling or importing articles bearing or embodying a design which is a copy, or substantially a copy, of the protected design, when such acts are undertaken for commercial purposes.
					</p>
				</div>

				<div id = "div2" style="display:none">
					<p>
						In order to be registrable, an industrial design must be a new or original creation.
					</p>
					<p>
						The following industrial designs shall not be registrable:	
					</p>
					<ol type="a">	
						<li>
							Industrial designs that are dictated essentially by technical or functional considerations to obtain a technical result;	
						</li>
						<li>
							Industrial designs which are mere schemes of surface ornamentations existing separately from the industrial product or handicraft; and
						</li>
						<li>	
							Industrial designs which are contrary to public order, health, or morals.
						</li>
					</ol>
				</div> 

				<div id = "div3" style="display:none">
					<p>
						The registration for an industrial design is for a period of 5 years from the filing date of the application. The registration of an industrial design may be renewed for not more than two (2) consecutive periods of five (5) years each (can be renewed for a maximum of 15 years) by paying a renewal fee. The fee should be paid within a year of the expiration of the registration.
					</p>
					<p>
						Industrial design registrations are governed by some of the same provisions that apply to patents. See what these are in Section 119 of the <u>Intellectual Property Code of the Philippines.</u>	
					</p>
				</div>
				
			</div>
		</div>
	</div>
	<div class="registration-row">
		<div class="registration-column">	
			<h3>INDUSTRIAL DESIGN REGISTRATION PROCESS</h3>
			<br>	
			<div class="registration-container">
				<img src="Industrial-Design.png">
			</div>
		</div>
	</div>
	<div class="form-row">
			<h3>INVENTION DISCLOSURE FORM</h3>
		<div class="form-column">
			<div class="form-container">
				<p>To disclose an invention, kindly download and fill out this form:</p>
				<a class="services-btn" href="./industrialdesignform.docx"><b>Invention Disclosure Form.doc</b></a>
			</div>
		</div>
		<div class="upload-column">
			<form action="/industrialDesign" enctype="multipart/form-data" method="post">
				@csrf
				<div class="form-container">
					<p>Rename the file as IDF_(invention Title) then Upload your fully accomplished form here:</p>
					<input type="file" name="industrialDesign" accept=".docx, .doc, .pdf" />
					<br><br>
					<input type="submit"/>
				</div>
			</form>
		</div>
	</div>
</div>

<script> 
	function replace1() { 
		document.getElementById("div1").style.display="block";
		document.getElementById("ben").style.background="white";

		document.getElementById("div2").style.display="none"; 
		document.getElementById("el").style.background="#6e6754";

		document.getElementById("div3").style.display="none"; 
		document.getElementById("term").style.background="#6e6754";
	}

	function replace2() { 
		document.getElementById("div1").style.display="none";
		document.getElementById("ben").style.background="#6e6754";

		document.getElementById("div2").style.display="block";
		document.getElementById("el").style.background="white";

		document.getElementById("div3").style.display="none"; 
		document.getElementById("term").style.background="#6e6754";
	}

	function replace3() { 
		document.getElementById("div1").style.display="none"; 
		document.getElementById("ben").style.background="#6e6754";

		document.getElementById("div2").style.display="none"; 
		document.getElementById("el").style.background="#6e6754";

		document.getElementById("div3").style.display="block";
		document.getElementById("term").style.background="white";
	} 
</script>
@stop
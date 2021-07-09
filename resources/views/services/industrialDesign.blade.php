@extends('layout.monster')
@section('content')

<head>
	<title>UCKTTO | Industrial Design</title>
</head>

<section class="container">
  <div class="row">
    <div class="col xl12 l12 m12 s12">
      <center><img src="img/KTTO.png" width="30%" height="20%"></center>
    </div>
  </div>
</section>

<div class="divider"></div>

<section>
	<div class="container">
		<div class="row">
			<div class="col s12">
				<h2>Industrial Design</h2>
				<div class="divider"></div>
				<p>An industrial design is the ornamental or aesthetic aspect of an article. Design, in this sense, may be three-dimensional features (shape or surface of an article), or the two-dimensional features (patterns or lines of color). Handicrafts, jewelry, vehicles, appliances - the subject of industrial designs range from fashion to industrial goods.</p>
			</div>
		</div>

		<div class="row" id="bet">
			<div class="col xl4 l4 m12 s12">
				<h5 id="ben" onclick="replace1()">BENEFITS</h5>
			</div>

			<div class="col xl4 l4 m12 s12">
				<h5 id="el" onclick="replace2()">ELIGIBILITY</h5>
			</div>

			<div class="col xl4 l4 m12 s12">
				<h5 id="term" onclick="replace3()">TERM OF PROTECTION</h5> 
			</div>

			<div class="col s12">
				<div id = "div1" style="display:block">
					<p>The owner of a registered industrial design has the right to prevent third parties from making, selling or importing articles bearing or embodying a design which is a copy, or substantially a copy, of the protected design, when such acts are undertaken for commercial purposes.</p>
				</div>

				<div id = "div2" style="display:none">
					<p>
						In order to be registrable, an industrial design must be a new or original creation. The following industrial designs shall not be registrable:	<br>Industrial designs that are dictated essentially by technical or functional considerations to obtain a technical result; <br>Industrial designs which are mere schemes of surface ornamentations existing separately from the industrial product or handicraft; and <br>Industrial designs which are contrary to public order, health, or morals. </p>
				</div> 

				<div id = "div3" style="display:none">
					<p>The registration for an industrial design is for a period of 5 years from the filing date of the application. The registration of an industrial design may be renewed for not more than two (2) consecutive periods of five (5) years each (can be renewed for a maximum of 15 years) by paying a renewal fee. The fee should be paid within a year of the expiration of the registration. Industrial design registrations are governed by some of the same provisions that apply to patents. See what these are in Section 119 of the <u>Intellectual Property Code of the Philippines.</u></p>
				</div>
			</div>
		</div>
	</div>
</section>
<div class="divider"></div>

<section>
	<div class="container">
		<div class="row">
			<div class="col s12">
				<h4>INDUSTRIAL DESIGN REGISTRATION PROCESS</h4>
				<img class="img" src="img/id.png">
			</div>
		</div>
	</div>
</section>

<div class="divider"></div>

<section>
	<div class="container">
		<div class="row">
			<div class="col s12">
				<h2>Download Form or Apply Online</h2>
			</div>
			<div class="col xl6 l6 m12 s12">
				<p>To disclose an invention, kindly download and fill out this form:</p>
				<a class="waves-effect waves-light btn green" href="./forms/INVENTION DISCLOSURE FORM.pdf"><b>Invention Disclosure Form</b></a>
			</div>

			<div class="col xl6 l6 m12 s12">
				<form action="/industrialDesign" enctype="multipart/form-data" method="post">
					@csrf
					<p>Rename the file as IDF_(invention Title) then Upload your fully accomplished form here:</p>
					<input type="file" name="industrialDesign" accept=".docx,.doc, .pdf" />
					<input type="hidden" name="category" value="industrial design">
					<br><br>
					<input type="submit"/>
				</form>
			</div>

			<div class="divider"></div>

			<div class="col s12">
				<a class="waves-effect waves-light btn green" href="/terms-id">REGISTER ONLINE</a>
			</div>
		</div>
	</div>
</section>

<script> 
	function replace1() { 
		document.getElementById("div1").style.display="block";
		document.getElementById("ben").style.background="teal";

		document.getElementById("div2").style.display="none"; 
		document.getElementById("el").style.background="white";

		document.getElementById("div3").style.display="none"; 
		document.getElementById("term").style.background="white";
	}

	function replace2() { 
		document.getElementById("div1").style.display="none";
		document.getElementById("ben").style.background="#white";

		document.getElementById("div2").style.display="block";
		document.getElementById("el").style.background="teal";

		document.getElementById("div3").style.display="none"; 
		document.getElementById("term").style.background="white";
	}

	function replace3() { 
		document.getElementById("div1").style.display="none"; 
		document.getElementById("ben").style.background="white";

		document.getElementById("div2").style.display="none"; 
		document.getElementById("el").style.background="white";

		document.getElementById("div3").style.display="block";
		document.getElementById("term").style.background="teal";
	} 
</script>
@stop
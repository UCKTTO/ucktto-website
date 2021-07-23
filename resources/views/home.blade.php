@extends('layout.monster')
@section('content')

<head>
	<title>UCKTTO | Home</title>
</head>

<section>
	<div class="parallax-container" id="home">
		<div class="parallax"><img src="img/ucnow.jpg"></div>
      	<div class="container">
      		<div class="row">
      			<div class="col xl12 l12 m12 s12">
			      <center><img src="img/kttowhite.png" width="50%" height="50%"></center>
			      <p>The University of the Cordilleras Knowledge and Technology Office (UC KTTO) was established under the Intellectual Property Management Program for Academic Institutions Commercializing Technologies (IMPACT) Program of the Department of Science and Technology (DOST) in November of 2020.</p>
			      <a class="waves-effect waves-light btn green" href="/about">Read More</a>
			    </div>
      		</div>		
    	</div>
</section>
    <div class="divider"></div>
<section class="parallax-container" id="events">
	<div class="parallax"><img src="img/white.jpg"></div>
		<div class="row">
			<div class="col s12 m12"> 
			<div class="card-panel horizontal"><h2>EVENTS</h2></div>
			<div class="divider"></div>
			</div>
			<div class="col xl4 l12 m12 s12" id="col">
				<a href="event1"><img src="img/event1_img.png"></a>
			</div>
			<div class="col xl4 l12 m12 s12" id="col">
				<a href="event2"><img src="img/event2_img.png"></a>
			</div>
			<div class="col xl4 l12 m12 s12" id="col">
				<a href="event3"><img src="img/event3_img.png"></a>
			</div>		
		</div>
	</div>
</section>

<section class="parallax-container" id="services">
	<div class="parallax"><img src="img/light.png"></div>
		<div class="row">
			<div class="col s12 m12"> 
			<div class="card-panel horizontal"><h2 style="color: black">SERVICES</h2></div>
			<div class="divider"></div>
			</div>
			<div class="col xl4 l4 m4 s12" id="col">
				<div class="card white">
					<div class="card-content black-text">
						<span class="card-title">FORMS</span>
						<p class="forms">You can download the forms here:<br>
						<a class="waves-effect waves-light btn green" href="./forms/INVENTION DISCLOSURE FORM.pdf">Invention Disclosure Form</a><br>
						<a class="waves-effect waves-light btn green" href="./forms/COPYRIGHT DISCLOSURE FORM.pdf">Copyright Disclosure Form</a><br>
						<a class="waves-effect waves-light btn green" href="./forms/TRADEMARK REGISTRATION REQUEST FORM.pdf">Trademark Registration Form</a><br>
						<a class="waves-effect waves-light btn green" href="./forms/ASSIGNMENT OF IP REPRESENTATIVE.pdf">Assignment of IP Representative Form</a><br>
						<a class="waves-effect waves-light btn green" href="./forms/SUPPLEMENTAL SHEET.pdf">Supplemental Sheet Form</a><br>
						<a class="waves-effect waves-light btn green" href="./forms/IP EVALUATION FORM.pdf">IP Evaluation Form</a><br>
						<a class="waves-effect waves-light btn green" href="./forms/NDA.pdf">Non-Disclosure Agreement Form</a>
						</p>
					</div>
				</div>
			</div>
			<div class="col xl4 l4 m4 s12" id="col">
				<div class="card white">
					<div class="card-content black-text">
						<span class="card-title">COPYRIGHT</span>
						<p class="form"><br><br>The legal protection extended to the owner of the rights in an original work. <br><br><br><a class="waves-effect waves-light btn green" href="/copyright">Read More</a><br><br><br></p>
						</p>
					</div>
				</div>
			</div>
			<div class="col xl4 l4 m4 s12" id="col">
				<div class="card white">
					<div class="card-content black-text">
						<span class="card-title">PATENT</span>
						<p class="form"><br><br>A government-issued grant, bestowing an exclusive right to an inventor over a product. <br><br><br><a class="waves-effect waves-light btn green" href="/patent">Read More</a><br><br><br></p>
				
					</div>
				</div>
			</div>	
		</div>
		<div class="row">
					<div class="col xl4 l4 m4 s12" id="col">
				<div class="card white">
					<div class="card-content black-text">
						<span class="card-title">TRADEMARK</span>
						<p class="form"><br>A word, a group of words, sign, symbol, logo or a combination thereof that identifies the source of the goods. <br><br><a class="waves-effect waves-light btn green" href="/trademark">Read More</a><br></p>
				
					</div>
				</div>
			</div>
		<div class="col xl4 l4 m4 s12" id="col">
				<div class="card white">
					<div class="card-content black-text">
						<span class="card-title">INDUSTRIAL DESIGN</span>
						<p class="form"><br><br>The ornamental or aesthetic aspect of an article. <br><br><br></b><a class="waves-effect waves-light btn green" href="/industrialDesign">Read More</a><br></p>
					</div>
				</div>
			</div>
		<div class="col xl4 l4 m4 s12" id="col">
				<div class="card white">
					<div class="card-content black-text">
						<span class="card-title">UTILITY MODEL</span>
						<p class="form"><br>Technical solution to a problem in any field of human activity which is new and industrially applicable.br <br><br><a class="waves-effect waves-light btn green" href="/utilityModel">Read More</a><br></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection

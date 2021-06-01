@extends('layout.monster')
@section('content')

<section>
	<div class="parallax-container" id="home">
		<div class="parallax"><img src="img/ucnow.jpg"></div>
      	<div class="container">
      		<div class="row">
      			<div class="col s12 m12" style="text-align: center">
      				<div class="home w3-animate-opacity">
      				<h1>Knowledge and Technology Transfer Office</h1>
					<p class="form">The University of the Cordilleras Knowledge and Technology Transfer Office (UC KTTO) was established under the Intellectual Property Managemant Program for Academic Institution Commercializing Technologies (IMPACT) Program of the Department of Science and Technology (DOST) in November of 2020. <br> <a class="waves-effect waves-light btn green" href="/about">READ MORE</a></p></div> 
    			</div>
			</div>
      	</div>		
    </div>
</section>

<section class="parallax-container">
	<div class="parallax"><img src="img/grey.jpg"></div>
		<div class="row" id="events">
			<div class="col s12 m12"> 
			<h2 style="color: black">EVENTS</h2>
			</div>
			<div class="col xl4 l4 m12 s12" id="col">
				<a href="/event1"><img src="event1_img.png"></a>
			</div>
			<div class="col xl4 l4 m12 s12" id="col">
				<a href="/event2"><img src="event2_img.png"></a>
			</div>
			<div class="col xl4 l4 m12 s12" id="col">
				<a href="/event3"><img src="event3_img.png"></a>
			</div>		
		</div>
		<div class="divider"></div>	
	</div>
</section>

<section class="parallax-container">
	<div class="parallax"><img src="img/white.jpg"></div>
	<div class="container" id="events">
		<div class="row">
			<div class="col s12 m12"> 
			<h2 style="color: black">SERVICES</h2>
			</div>
			<div class="col xl4 l4 m4 s12" id="col">
				<div class="card white">
					<div class="card-content black-text">
						<span class="card-title">FORMS</span>
						<p class="forms">You can download the forms here:<br>
						<a class="waves-effect waves-light btn green" href="./patentform.docx">Patent Form</a><br>
						<a class="waves-effect waves-light btn green" href="./copyrightform.docx">Copyright Form</a><br>
						<a class="waves-effect waves-light btn green" href="./trademarkform.docx">Trademark Form</a><br>
						<a class="waves-effect waves-light btn green" href="./industrialdesignform.docx">Industrial Design Form</a><br>
						<a class="waves-effect waves-light btn green" href="./utilitymodelform.docx">Utility Model Form</a>
						</p>
					</div>
				</div>
			</div>
			<div class="col xl4 l4 m4 s12" id="col">
				<div class="card white">
					<div class="card-content black-text">
						<span class="card-title">COPYRIGHT</span>
						<p class="form"><br>The legal protection extended to the owner of the rights in an original work. <br><br><br><a class="waves-effect waves-light btn green" href="/copyright">Read More</a><br><br><br></p>
						</p>
					</div>
				</div>
			</div>
			<div class="col xl4 l4 m4 s12" id="col">
				<div class="card white">
					<div class="card-content black-text">
						<span class="card-title">PATENT</span>
						<p class="form"><br>A government-issued grant, bestowing an exclusive right to an inventor over a product. <br><br><a class="waves-effect waves-light btn green" href="/patent">Read More</a><br><br><br></p>
				
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
						<p class="form"><br>The ornamental or aesthetic aspect of an article. <br><br><br></b><a class="waves-effect waves-light btn green" href="/industrialDesign">Read More</a><br></p>
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

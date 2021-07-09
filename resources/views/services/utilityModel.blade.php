@extends('layout.monster')
@section('content')

<head>
	<title>UCKTTO | Utility Model</title>
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
				<h2>Utility Model</h2>
				<div class="divider"></div>
				<p>A registrable utility model is any technical solution to a problem in any field of human activity which is new and industrially applicable. It <b>may or may not have an inventive step.</b></p>
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
					<p>A Utility Model (UM) allows the right holder to prevent others from commercially using the registered UM without his authorization, provided that the UM is new based on the Registrability Report. Compared with invention patents, it is relatively inexpensive, faster to obtain, and with less stringent patentability requirements.</p>
				</div>

				<div id = "div2" style="display:none">
					<p>Any technical solution of a problem in any field of human activity which is new and industrially applicable shall be registrable. The provisions regarding “Non-Patentable Inventions” as provided for in Part 2, Rule 202 of the <u>Regulations for Patents</u> shall apply, mutatis mutandis, to non-registrable utility models: <br> Discoveries, scientific theories and mathematical methods; <br>Schemes, rules and methods of performing mental acts, playing games or doing business, and programs for computers; <br>Methods for treatment of the human or animal body by surgery or therapy and diagnostic methods practiced on the human or animal body. This provision shall not apply to products and composition for use in any of these methods; <br> Plant varieties or animal breeds or essentially biological process for the production of plants or animals. This provision shall not apply to micro-organisms and non-biological and microbiological processes. <br> Provisions under this subsection shall not preclude Congress to consider the enactment of a law providing sui generis protection of plant varieties and animal breeds and a system of community intellectual rights protection: <br> Aesthetic creations; and <br>	Anything which is contrary to public order or morality.</p>
				</div> 

				<div id = "div3" style="display:none">
					<p>A utility model is entitled to seven (7) years of protection from the date of filing, with no possibility of renewal.</p>
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
				<h4>UTILITY MODEL REGISTRATION PROCESS</h4>
				<img class="img" src="img/um.png">
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
				<form action="/utilityModel" enctype="multipart/form-data" method="post">
					@csrf
					<p>Rename the file as IDF_(invention Title) then Upload your fully accomplished form here:</p>
					<input type="file" name="utilityModel" accept=".docx,.doc, .pdf" />
					<input type="hidden" name="category" value="utility model">
					<br><br>
					<input type="submit"/>
				</form>
			</div>

			<div class="divider"></div>

			<div class="col s12">
				<a class="waves-effect waves-light btn green" href="/terms-um">REGISTER ONLINE</a>
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
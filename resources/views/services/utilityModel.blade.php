@extends('layout.monster')
@section('content')
<div class="services w3-animate-opacity">
	<h2>UTILITY MODEL</h2>
	<div class="def-row">
		<div class="def-container">
			<p>
				A registrable utility model is any technical solution to a problem in any field of human activity which is new and industrially applicable. It <b>may or may not have an inventive step.</b>
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
						A Utility Model (UM) allows the right holder to prevent others from commercially using the registered UM without his authorization, provided that the UM is new based on the Registrability Report. Compared with invention patents, it is relatively inexpensive, faster to obtain, and with less stringent patentability requirements.
					</p>
				</div>

				<div id = "div2" style="display:none">
					<p>
						Any technical solution of a problem in any field of human activity which is new and industrially applicable shall be registrable.
					</p>
					<p>	
						The provisions regarding “Non-Patentable Inventions” as provided for in Part 2, Rule 202 of the <u>Regulations for Patents</u> shall apply, mutatis mutandis, to non-registrable utility models:
					</p>
					<ol type="a">	
						<li>	
							Discoveries, scientific theories and mathematical methods;
						</li>
						<li>	
							Schemes, rules and methods of performing mental acts, playing games or doing business, and programs for computers;
						</li>
						<li>	
							Methods for treatment of the human or animal body by surgery or therapy and diagnostic methods practiced on the human or animal body. This provision shall not apply to products and composition for use in any of these methods;
						</li>
						<li>	
							Plant varieties or animal breeds or essentially biological process for the production of plants or animals. This provision shall not apply to micro-organisms and non-biological and microbiological processes.
						</li>
						<li>	
							Provisions under this subsection shall not preclude Congress to consider the enactment of a law providing sui generis protection of plant varieties and animal breeds and a system of community intellectual rights protection:
						</li>
						<li>	
							Aesthetic creations; and
						</li>
						<li>	
							Anything which is contrary to public order or morality.
						</li>
					</ol>
				</div> 

				<div id = "div3" style="display:none">
					<p>
						A utility model is entitled to seven (7) years of protection from the date of filing, with no possibility of renewal.
					</p>
				</div>
			</div>
		</div>
	</div>
	<div class="registration-row">
		<div class="registration-column">	
			<h3>UTILITY MODEL REGISTRATION PROCESS</h3>
			<br>	
			<div class="registration-container">
				<img src="Utility-Model.png">
			</div>
		</div>
	</div>
	<div class="form-row">
			<h3>INVENTION DISCLOSURE FORM</h3>
		<div class="form-column">
			<div class="form-container">
				<p>To disclose an invention, kindly download and fill out this form:</p>
				<a class="services-btn" href="utilitymodelform.docx"><b>Invention Disclosure Form.doc</b></a>
			</div>
		</div>
		<div class="upload-column">
				<form action="/utilityModel" enctype="multipart/form-data" method="post">
					@csrf
					<div class="form-container">
						<p>Rename the file as IDF_(invention Title) then Upload your fully accomplished form here:</p>
						<input type="file" name="utilityModel" accept=".docx, .doc, .pdf" />
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
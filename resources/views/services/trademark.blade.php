@extends('layout.monster')
@section('content')
<div class="services w3-animate-opacity">
	<h2>TRADEMARK</h2>
	<div class="def-row">
		<div class="def-container">
			<p>
				A trademark is a word, a group of words, sign, symbol, logo or a combination thereof that identifies and differentiates the source of the goods or services of one entity from those of others.
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
						A trademark protects a business’ brand identity in the marketplace.
					</p>
					<p>	
						Registration of it gives the owner the exclusive rights to prevent others from using or exploiting the mark in any way.
					</p>
					<p>	
						Aside from being a source-identifier, differentiator, quality indicator, and an advertising device, a protective mark may also bring another stream of income to the owner through licensing or franchising.
					</p>
				</div>

				<div id = "div2" style="display:none">
					<p>
						The Intellectual Property Code of the Philippines prescribes grounds for non-registrability.
					</p>
					<p>	
						See the <u>Intellectual Property Code of the Philippines,</u> Section 123. Generally, the <b>distinctiveness of the mark</b> is the key point of consideration.
					</p>
				</div> 

				<div id = "div3" style="display:none">
					<p>
						A trademark can be protected in perpetuity if regularly monitored and properly maintained.
					</p>
					<p>	
						The period of protection is ten (10) years from the date of issuance and is renewable for a period of ten (10) years at a time.
					</p>
				</div>
			</div>
		</div>
	</div>
	<div class="registration-row">
		<div class="registration-column">	
			<h3>TRADEMARK REGISTRATION PROCESS</h3>
			<br>	
			<div class="registration-container">
				<img src="Trademark.png">
			</div>
		</div>
	</div>
	<div class="form-row">
			<h3>INVENTION DISCLOSURE FORM</h3>
		<div class="form-column">
			<div class="form-container">
				<p>To disclose an invention, kindly download and fill out this form:</p>
				<a class="services-btn" href="./trademarkform.docx"><b>Invention Disclosure Form.doc</b></a>
			</div>
		</div>
		<div class="upload-column">
				<form action="/trademark" enctype="multipart/form-data" method="post">
					@csrf
					<div class="form-container">
						<p>Rename the file as IDF_(invention Title) then Upload your fully accomplished form here:</p>
						<input type="file" name="trademark" accept=".docx, .doc, .pdf" />
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
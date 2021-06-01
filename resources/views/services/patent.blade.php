@extends('layout.monster')
@section('content')
<div class="services w3-animate-opacity">
	<h2>PATENT</h2>
	<div class="def-row">
		<div class="def-container">
			<p>An invention patent is a government-issued grant, bestowing an exclusive right to an inventor over a product or process that provides any technical solution to a problem in any field of human activity which is <b>new, inventive, and industrially applicable.</b></p>
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
						A patent is an exclusive right that allows the inventor to exclude others from making, using, or selling the product of his invention during the life of the patent. Patent owners may also give permission to, or license, other parties to use their inventions on mutually agreed terms. Owners may also sell their invention rights to someone else, who then becomes the new owner of the patent.
					</p>
				</div>

				<div id = "div2" style="display:none">
					<p>
						The Intellectual Property Code of the Philippines sets three conditions for an invention to be deemed patentable: it has to be new, involves an inventive step, and industrially applicable.
					</p>

					<p>
						An invention is <b>not considered new</b> if it already forms part of the domain of <b>prior art.</b>  Prior art is explained in the Intellectual Property Code of the Philippines, Chapter 2, Section 24 - 24.2
					</p>

					<p>
						An invention involves an <b>inventive step</b> if, having regard to prior art, it is not obvious to a person skilled in the art at the time of the filing date or priority date of the application claiming the invention. An invention that can be produced and used in any industry is considered <b>industrially applicable.</b>
					</p>
				</div> 

				<div id = "div3" style="display:none">
					<p>
						The term of a patent shall be twenty <b>(20) years</b> from the filing date of the application. The patent must be maintained yearly, starting from the 5th year.
					</p>
				</div>
			</div>
		</div>
	</div>
	<div class="registration-row">
		<div class="registration-column">	
			<h3>PATENT REGISTRATION PROCESS</h3>
			<br>	
			<div class="registration-container">
				<img src="Patent.png">
			</div>
		</div>
	</div>
	<div class="form-row">
			<h3>INVENTION DISCLOSURE FORM</h3>
		<div class="form-column">
			<div class="form-container">
				<p>To disclose an invention, kindly download and fill out this form:</p>
				<a class="services-btn" href="./patentform.docx"><b>Invention Disclosure Form.doc</b></a>
			</div>
		</div>
		<div class="upload-column">
				<form action="/patent" enctype="multipart/form-data" method="post">
					@csrf
					<div class="form-container">
						<p>Rename the file as IDF_(invention Title) then Upload your fully accomplished form here:</p>
						<input type="file" name="patent" accept=".docx, .doc, .pdf" />
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
@extends('layout.monster')
@section('content')
<div class="services w3-animate-opacity">
	<h2>COPYRIGHT</h2>
	<div class="def-row">
		<div class="def-container">
			<p>
				Copyright is the legal protection extended to the owner of the rights in an original work. “Original work” refers to every production in the literary, scientific and artistic domain.
			</p>
			<p>	
				Among the literary and artistic works enumerated in the IP Code includes books and other writings, musical works, films, paintings and other works, and computer programs.
			</p>
			<p>	
				Copyright laws grant authors, artists and other creators automatic protection for their literary and artistic creations, from the moment they create it.
			</p>
			<p>	
				Recordation or deposit of your works isn’t necessary but authors and artists may opt to execute an affidavit of ownership with the National Library or the IPOPHL for the issuance of recordation and deposit.
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
					<p>The creators of works protected by copyright hold the exclusive right to use or authorize others to use the work on agreed terms.</p>
					<p>The right holder(s) of a work can authorize or prohibit: its reproduction in all forms, including print form and sound recording, public performance and communication to the public, broadcasting, translation into other languages, and adaptation, such as from a novel to a screenplay for a film.</p>
				</div>

				<div id = "div2" style="display:none">
					<p>Works covered by copyright that can be deposited with IPOPHL are, but are not limited to: novels, poems, plays, reference works, newspapers, advertisements, computer programs, databases, films, musical compositions, choreography, paintings, drawings, photographs, sculpture, architecture, maps and technical drawings.</p>
					<p>	To learn more about the works covered by copyright, refer to the <u>Intellectual Property Code of the Philippines,</u> Chapter II.</p>
				</div> 

				<div id = "div3" style="display:none">
					<p>The term of protection for copyright in literary and artistic works, and in derivative works is generally the lifetime of the author plus fifty (50) years. Different rules may apply, however in:</p>
					<ul>	
						<li>	
							Works of joint authorship
						</li>
						<li>	
							Works of anonymous or pseudonymous works
						</li>
						<li>	
							Photographic works
						</li>
						<li>	
							Works of applied art
						</li>
						<li>	
							Audio-visual works
						</li>
					</ul>
					<p>	
						See how these are different in the <u>Intellectual Property Code of the Philippines,</u> Chapter XVI, Section 213.
					</p>
				</div>
			</div>
			
		</div>
	</div>
	<div class="registration-row">
		<div class="registration-column">	
			<h3>COPYRIGHT REGISTRATION PROCESS</h3>
			<br>	
			<div class="registration-container">
				<img src="Copyright.png">
			</div>
		</div>
	</div>
	<div class="form-row">
			<h3>INVENTION DISCLOSURE FORM</h3>
		<div class="form-column">
			<div class="form-container">
				<p>To disclose an invention, kindly download and fill out this form:</p>
				<a class="services-btn" href="./copyrightform.docx"><b>Invention Disclosure Form.doc</b></a>
			</div>
		</div>
		<div class="upload-column">
			<form action="/copyright" enctype="multipart/form-data" method="post">
				@csrf
				<div class="form-container">
					<p>Rename the file as IDF_(invention Title) then Upload your fully accomplished form here:</p>
					<input type="file" name="copyright" accept=".docx, .doc, .pdf" />
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
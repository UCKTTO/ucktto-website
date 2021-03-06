@extends('layout.monster')
@section('content')

<head>
	<title>UCKTTO | Copyright</title>
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
				<div class="card-panel horizontal">
				<h2>Copyright</h2>
				<div class="divider"></div>
				<p>Copyright is the legal protection extended to the owner of the rights in an original work. “Original work” refers to every production in the literary, scientific and artistic domain. Among the literary and artistic works enumerated in the IP Code includes books and other writings, musical works, films, paintings and other works, and computer programs. Copyright laws grant authors, artists and other creators automatic protection for their literary and artistic creations, from the moment they create it. Recordation or deposit of your works isn’t necessary but authors and artists may opt to execute an affidavit of ownership with the National Library or the IPOPHL for the issuance of recordation and deposit.</p>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col s12">
				<ul class="collapsible yellow lighten-5">
				    <li class="active">
				      <div class="collapsible-header" style="color: black;">BENEFITS</div>
				      <div class="collapsible-body" style="color: black;"><span><p>The creators of works protected by copyright hold the exclusive right to use or authorize others to use the work on agreed terms. The right holder(s) of a work can authorize or prohibit: its reproduction in all forms, including print form and sound recording, public performance and communication to the public, broadcasting, translation into other languages, and adaptation, such as from a novel to a screenplay for a film.</p></span></div>
				    </li>
				    <li>
				      <div class="collapsible-header" style="color: black;">ELIGIBILITY</div>
				      <div class="collapsible-body" style="color: black;"><span><p>Works covered by copyright that can be deposited with IPOPHL are, but are not limited to: novels, poems, plays, reference works, newspapers, advertisements, computer programs, databases, films, musical compositions, choreography, paintings, drawings, photographs, sculpture, architecture, maps and technical drawings. <br> To learn more about the works covered by copyright, refer to the <u>Intellectual Property Code of the Philippines,</u> Chapter II.</p></span></div>
				    </li>
				    <li>
				      <div class="collapsible-header"  style="color: black;">TERM OF PROTECTION</div>
				      <div class="collapsible-body" style="color: black;"><span><p>The term of protection for copyright in literary and artistic works, and in derivative works is generally the lifetime of the author plus fifty (50) years. Different rules may apply, however in: <br> Works of joint authorship <br>Works of anonymous or pseudonymous works <br>Photographic works <br> Works of applied art <br>Audio-visual works <br><br>See how these are different in the <u>Intellectual Property Code of the Philippines,</u> Chapter XVI, Section 213.
					</p></span></div>
				    </li>
				  </ul>
			</div>
			
		</div>
</section>
<div class="divider"></div>

<section>
	<div class="container">
		<div class="row">
			<div class="col s12">
				<div class="card-panel horizontal"><h4>COPYRIGHT REGISTRATION PROCESS</h4></div>
				<img class="img" src="img/copy.png">
			</div>
		</div>
	</div>
</section>

<div class="divider"></div>

<section>
	<div class="container">
		<div class="row">
			<div class="col s12">
				<div class="card-panel horizontal"><h2>Download Form</h2></div>
			</div>
			<div class="col xl6 l6 m12 s12">
				<p>To disclose an invention, kindly download and fill out this form:</p>
				<a class="waves-effect waves-light btn green" href="./forms/COPYRIGHT DISCLOSURE FORM.pdf"><b>Copyright Disclosure Form</b></a>
			</div>

			<div class="col xl6 l6 m12 s12">
				<form action="/copyright" enctype="multipart/form-data" method="post">
					@csrf
					<p>Rename the file as CDF_(invention Title) then Upload your fully accomplished form here:</p>
					<input type="file" name="copyright" accept=".docx,.doc, .pdf" />
					<input type="hidden" name="category" value="copyight">
					<br><br>
					<input type="submit"/>
				</form>
			</div>

			<div class="divider"></div>

			<!-- <div class="col s12">
				<a class="waves-effect waves-light btn green" href="/terms">REGISTER ONLINE</a>
			</div> -->
		</div>
	</div>
</section>

@stop

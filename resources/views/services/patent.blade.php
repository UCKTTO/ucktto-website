@extends('layout.monster')
@section('content')

<head>
	<title>UCKTTO | Patent</title>
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
				<div class="card-panel horizontal"><h2>Patent</h2>
				<div class="divider"></div>
				<p>An invention patent is a government-issued grant, bestowing an exclusive right to an inventor over a product or process that provides any technical solution to a problem in any field of human activity which is <b>new, inventive, and industrially applicable.</b></p>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col s12">
				<ul class="collapsible yellow lighten-5">
				    <li class="active">
				      <div class="collapsible-header" style="color: black;">BENEFITS</div>
				      <div class="collapsible-body" style="color: black;"><span><p>A patent is an exclusive right that allows the inventor to exclude others from making, using, or selling the product of his invention during the life of the patent. Patent owners may also give permission to, or license, other parties to use their inventions on mutually agreed terms. Owners may also sell their invention rights to someone else, who then becomes the new owner of the patent.</p></span></div>
				    </li>
				    <li>
				      <div class="collapsible-header" style="color: black;">ELIGIBILITY</div>
				      <div class="collapsible-body" style="color: black;"><span><p>The Intellectual Property Code of the Philippines sets three conditions for an invention to be deemed patentable: it has to be new, involves an inventive step, and industrially applicable.An invention is <b>not considered new</b> if it already forms part of the domain of <b>prior art.</b>  Prior art is explained in the Intellectual Property Code of the Philippines, Chapter 2, Section 24 - 24. An invention involves an <b>inventive step</b> if, having regard to prior art, it is not obvious to a person skilled in the art at the time of the filing date or priority date of the application claiming the invention. An invention that can be produced and used in any industry is considered <b>industrially applicable.</b>
					</p></span></div>
				    </li>
				    <li>
				      <div class="collapsible-header"  style="color: black;">TERM OF PROTECTION</div>
				      <div class="collapsible-body" style="color: black;"><span><p>The term of a patent shall be twenty <b>(20) years</b> from the filing date of the application. The patent must be maintained yearly, starting from the 5th year.</p></span></div>
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
				<div class="card-panel horizontal"><h4>PATENT REGISTRATION PROCESS</h4></div>
				<img class="img" src="img/patent.png">
			</div>
		</div>
	</div>
</section>

<div class="divider"></div>

<section>
	<div class="container">
		<div class="row">
			<div class="col s12">
				<div class="card-panel horizontal"><h2>Download Form or Apply Online</h2></div>
			</div>
			<div class="col xl6 l6 m12 s12">
				<p>To disclose an invention, kindly download and fill out this form:</p>
				<a class="waves-effect waves-light btn green" href="./INVENTION DISCLOSURE FORM (FINAL).pdf"><b>Invention Disclosure Form</b></a>
			</div>

			<div class="col xl6 l6 m12 s12">
				<form action="/patent" enctype="multipart/form-data" method="post">
					@csrf
					<p>Rename the file as IDF_(invention Title) then Upload your fully accomplished form here:</p>
					<input type="file" name="patent" accept=".docx,.doc, .pdf"/>
					<br><br>
					<input type="submit"/>
				</form>
			</div>

			<div class="divider"></div>

			<div class="col s12">
				<a class="waves-effect waves-light btn green" href="/terms-patent">REGISTER ONLINE</a>
			</div>
		</div>
	</div>
</section>


@stop
@extends('layout.monster')
@section('content')

<head>
	<title>UCKTTO | Trademark</title>
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
				<h2>Trademark</h2>
				<div class="divider"></div>
				<p>A trademark is a word, a group of words, sign, symbol, logo or a combination thereof that identifies and differentiates the source of the goods or services of one entity from those of others.</p>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col s12">
				<ul class="collapsible yellow lighten-5">
				    <li class="active">
				      <div class="collapsible-header" style="color: black;">BENEFITS</div>
				      <div class="collapsible-body" style="color: black;"><span><p>A trademark protects a business’ brand identity in the marketplace.Registration of it gives the owner the exclusive rights to prevent others from using or exploiting the mark in any way.Aside from being a source-identifier, differentiator, quality indicator, and an advertising device, a protective mark may also bring another stream of income to the owner through licensing or franchising.</p></span></div>
				    </li>
				    <li>
				      <div class="collapsible-header" style="color: black;">ELIGIBILITY</div>
				      <div class="collapsible-body" style="color: black;"><span><p>The Intellectual Property Code of the Philippines prescribes grounds for non-registrability. See the <u>Intellectual Property Code of the Philippines,</u> Section 123. Generally, the <b>distinctiveness of the mark</b> is the key point of consideration.</p></span></div>
				    </li>
				    <li>
				      <div class="collapsible-header"  style="color: black;">TERM OF PROTECTION</div>
				      <div class="collapsible-body" style="color: black;"><span><p>A trademark can be protected in perpetuity if regularly monitored and properly maintained. The period of protection is ten (10) years from the date of issuance and is renewable for a period of ten (10) years at a time.</p></span></div>
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
				<div class="card-panel horizontal"><h4>TRADEMARK REGISTRATION PROCESS</h4></div>
				<img class="img" src="img/trade.png">
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
				<a class="waves-effect waves-light btn green" href="./forms/TRADEMARK REGISTRATION REQUEST FORM.pdf"><b>Trademark Registration Request Form</b></a>
			</div>

			<div class="col xl6 l6 m12 s12">
				<form action="/trademark" enctype="multipart/form-data" method="post">
					@csrf
					<p>Rename the file as TRF_(invention Title) then Upload your fully accomplished form here:</p>
					<input type="file" name="trademark" accept=".docx,.doc, .pdf" />
					<input type="hidden" name="category" value="trademark">
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
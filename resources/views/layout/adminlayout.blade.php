<!DOCTYPE html>
<html lang="en-US" class="no-js">

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta charset="UTF-8">
 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	<link href="/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,600,700&display=swap" rel="stylesheet">
	@include('layout.css')
</head>

<body>

<section>
	<div class="w3-sidebar w3-teal w3-bar-block" style="width:15%">
	  <div class="center">
		<h2>Admin<i class="material-icons right">menu</i></h2><br>
		<div class="divider"></div><br>
		<ul>
			<li><a href="/dashboard">Dashboard</a><i class="material-icons left">dashboard</i></li><br><br>
			<li><a href="/userprof">User Profile</a><i class="material-icons left">account_circle</i></li><br><br>
			<li><a href="/notifications">Notifications</a><i class="material-icons left">notifications</i></li><br><br>
			<li><a href="/admin/faq">FAQ</a><i class="material-icons left">question_answer</i></li>
		</ul><br>
		<div class="divider"></div><br>
		<ul>
			<li><a href="/ipassessment">IP Assessment</a><i class="material-icons left">assignment</i></li><br>
			<ul>
				<li><a href="/metrics">Metrics<i class="material-icons right">assessment</i></a></li><br>
				<li><a href="/colleges">Colleges<i class="material-icons right">storage</i></a></li><br>
			</ul>
		</ul>

		</div>
	</div>
	<div style="margin-left:15%">
	<div class="w3-container w3-light-grey">
	  <form action="/logout" method="GET" class="center">
	  	<h3> Welcome Admin
			<button class="btn waves-effect"type="submit" name="action">Logout</button> </h3>
		</form>
	</div>
	@yield('content')
</section>

</body>

  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="/js/materialize.js"></script>
  <script src="/js/init.js"></script>
  <script type="text/javascript" src="plugins.js"></script>
    
    <script>
      $( document ).ready(function(){
        $(".dropdown-trigger").dropdown({ hover: false});
        $('.sidenav').sidenav();
        $('.collapsible').collapsible();
      });
    </script>

	@if (session()->has('popup'))
	echo '<script type="text/javascript">alert("Successfully Submitted")</script>';
	@endif

</html>
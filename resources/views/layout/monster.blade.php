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
<!-- Header================================================== -->
<header>

	  <div class="navbar-fixed">
	  	<!-- dropdown content -->
        <ul id="dropdown1" class="dropdown-content">
		<li><a href="/patent">Patent</a></li><li class="divider"></li>
		<li><a href="/utilityModel">Utility Model</a></li><li class="divider"></li>
	  	<li><a href="/trademark">Trademark</a></li><li class="divider"></li>
	  	<li><a href="/copyright">Copyright</a></li><li class="divider"></li>
		<li><a href="/industrialDesign">Industrial Design</a></li>
      </ul>

      <nav class="nav">
	    <div class="nav-wrapper">
	      <img src="img/ktto-logo.png" class="brand-logo">
	      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
	      <ul class="right hide-on-med-and-down">
	       <li><a href="/">Home</a></li>
	       <li><a href="/about">About</a></li>
	       <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Services<i class="material-icons right">arrow_drop_down</i></a></li>
	       <li><a href="/policy">Policy</a></li>
	       <li><a href="/faq">FAQ</a></li>
         <li><a href="/contact">Contact</a></li>
	      </ul>
	    </div>
	  </nav>
    </div>

    <ul class="sidenav" id="mobile-demo">
      <li class="logo"><img src="img/ktto-logo.png" class="brand-logo"></li>
      <li><a href="/">Home</a></li>
	  <li><a href="/about">About</a></li>
      <li>
        <ul class="collapsible collapsible-accordion">
          <li>
            <a class="collapsible-header">Services<i class="material-icons right">arrow_drop_down</i></a>
            <div class="collapsible-body">
                <ul id="" class="">
                  	<li><a href="/patent">Patent</a></li><li class="divider"></li>
          					<li><a href="/utilityModel">Utility Model</a></li><li class="divider"></li>
          				  <li><a href="/trademark">Trademark</a></li><li class="divider"></li>
          					<li><a href="/copyright">Copyright</a></li><li class="divider"></li>
          					<li><a href="/industrialDesign">Industrial Design</a></li>
                </ul>
            </div>
          </li>
        </ul>
      </li>
    <li><a href="/policy">Policy</a></li>
	  <li><a href="/faq">FAQ</a></li>
    <li><a href="/contact">Contact</a></li>
    </ul>	
</header>	    	

	@yield('content')
	
	<!-- Footer -->
<footer class="page-footer" id="foo">
         <div class="footer-copyright" id="footer">
            <div class="container">
            <center>All Rights Reserved © 2020</center>
          </div>
    </div>
</footer>

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
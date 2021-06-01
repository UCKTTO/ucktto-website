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
	<title>UCKTTO</title>

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

	  <ul id="dropdown2" class="dropdown-content">
		<li><a href="/ip-policy-tb-content">IP Policy</a></li><li class="divider"></li>
		<li><a href="/ktto-policy-tb-content">UC KTTO Policy</a></li>
	 </ul>

      <nav class="nav">
	    <div class="nav-wrapper">
	      <img src="ktto-logo.png" class="brand-logo">
	      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
	      <ul class="right hide-on-med-and-down">
	       <li><a href="/">Home</a></li>
	       <li><a href="/about">About</a></li>
	       <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Services<i class="material-icons right">arrow_drop_down</i></a></li>
	       <li><a class="dropdown-trigger" href="#!" data-target="dropdown2">Policy<i class="material-icons right">arrow_drop_down</i></a></li>
	       <li><a href="/faq">FAQ</a></li>
	      </ul>
	    </div>
	  </nav>
    </div>

    <ul class="sidenav" id="mobile-demo">
      <li class="logo"><img src="ktto-logo.png" class="brand-logo"></li>
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
          <li>
            <a class="collapsible-header">Policy<i class="material-icons right">arrow_drop_down</i></a>
            <div class="collapsible-body">
                <ul id="" class="">
                  	<li><a href="/ip-policy-tb-content">IP Policy</a></li><li class="divider"></li>
					<li><a href="/ktto-policy-tb-content">UC KTTO Policy</a></li>
                </ul>
            </div>
          </li>
        </ul>
      </li>
	  <li><a href="/faq">FAQ</a></li>
    </ul>	
</header>	    	

	@yield('content')
	
	<!-- Footer -->
<footer class="page-footer" id="foo">
	<div class="container">
   		<div class="row">
            <div class="col l6 s12">
                <h4 class="white-text">Contact Us</h4>
                <ul>
                  <li style="font-size: 15px"><i class="tiny material-icons">add_location</i> University of the Cordilleras Legarda Campus, Legarda Road, <br>&nbsp&nbsp&nbsp Baguio City, Philippines 2600</li> <br>
                  <li style="font-size: 15px"><i class="tiny material-icons">email</i> ucktto@uc-bcf.edu.ph <br>&nbsp&nbsp&nbsp ucktto2020@gmail.com</li> <br>
                  <li style="font-size: 15px"><i class="tiny material-icons">phone</i> (074) 442-3361 local 361</li>
                </ul>
                
            </div>
           <div class="col l4 offset-l2 s12">
           		<h4 class="white-text">Visit Us</h4>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3827.3154941495586!2d120.59783803134178!3d16.408795662333713!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3391a1426d6ff0fd%3A0xfe9ac4d43fc84157!2sUniversity%20of%20the%20Cordilleras!5e0!3m2!1sen!2sph!4v1621905721523!5m2!1sen!2sph" width="100%" height="110%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
              </div>
            </div>
          </div>
          <div class="footer-copyright" id="footer">
            <div class="container">
            <center>All Rigts Reserved © 2020</center>
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
        $(".dropdown-trigger").dropdown({ hover: true });
        $('.sidenav').sidenav();
        $('.collapsible').collapsible();
      });
    </script>

	@if (session()->has('popup'))
	echo '<script type="text/javascript">alert("Successfully Submitted")</script>';
	@endif

</html>
<style>

body {
	font-family: Verdana, sans-serif;
    display: flex;
    min-height: 100vh;
    flex-direction: column;
    letter-spacing: 1px;
}

main {
  	 flex: 1 0 auto;
}

.container {
    width: 100%
}

.sidenav li>a {padding:0 32px !important}

.collapsible-body>ul>li>a {
	padding: 0 48px !important;
	font-weight: 400 !important;
	}

#home{
	background: rgba(1, 50, 0, 0.8);
}

#events{
	text-align: center;
	color: black;
}

#col{
	padding: 1%;
}

.forms a{
	margin: .8%;
}

.form .forms a:hover{
	opacity: .8;
}

.nav{
	background-color: #013200;
	color: white;	
}
.nav a,li{
	color: white;
}
#foo{
	background-color: #295228;
}
#footer{
	background-color: #013200;
	color: white;	
}




/*Below this line is the old code*/
	/*about page*/
	.slideshow {
		height: 200px;
	}
	.vmo-container {
		padding: 50px 100px 50px 100px;
		background-color: #ede5d8;
		color: black;
	}
	.os-container {
		height: 300px;
	}

	/*services*/
	.services {
		background-color: #ede5d8;
		padding-top: 10px;
	}
	.services h2 {
		text-align: center;
	}
	.registration-column h3 {
		text-align: center;
		padding-top: 50px;
	}
	.form-row h3 {
		text-align: center;
	}
	.services p {
		text-align: justify;
		padding: 10px;
	}
	.form-container p {
		text-align: center;
		margin: 10px;
	}
	.def-container {
		background-color: white;
		width: 85%;
		margin-left: auto;
		margin-right: auto;
	}
	.bet-column {
		background-color: #ede5d8;
		padding-bottom: 50px;
	}
	.bet-container {
		background-color: white;
		width: 85%;
		margin: auto;
		border: 3px solid #013200;
		border-radius: 20px;
	}
	.bet-container h4 {
		margin-top: 0px;
		float: left;
		width: 33.33%;
		text-align: center;
		background-color: #6e6754;
		padding: 10px;
		border-style: solid;
		border-width: 0px 1.5px 0px 1.5px;
		border-color: #013200;
		border-radius: 10px;
	}
	.registration-column {
		background-color: white;
		padding-bottom: 50px;
	}
	.registration-container {
		background-color: #d1c5a3;
		width: 85%;
		margin-left: auto;
		margin-right: auto;
	}
	.registration-container img{
		width: 98%;
		height: auto;
		margin: 10px 10px 10px 10px;
	}
	.form-column {
		width: 50%;
		float: left;
		margin-left: auto;
		margin-right: auto;
		background-color: #ede5d8;
		padding-bottom: 40px;
	}
	.upload-column {
		width: 50%;
		float: left;
		margin-left: auto;
		margin-right: auto;
		background-color: #ede5d8;
		padding-bottom: 40px;
		border-left: 6px solid black;
	}
	.form-container {
		background-color: #ede5d8;
		width: 65%;
		height: 125px;
		margin-left: auto;
		margin-right: auto;
		margin-bottom: 20px;

	}
	.form-row {
		background-color: #ede5d8;
		padding-bottom: 10px;

	}
	.services-btn1 {
		background: white;
		color: black;
		padding: 5px;
		margin-left: 155px;
		text-decoration: none;
	}
	.services-btn2 {
		background: #013200;
		color: white;
		padding: 5px;
		margin-left: 175px;
		text-decoration: none;
	}
	.services-btn {
		text-align: center;
		background: white;
		color: black;
		padding: 5px;
		margin-left: 75px;
		text-decoration: none;s
	}
	.services-btn:hover{
		border: 3px solid #013200;
		border-radius: 10px;
		padding: 10px;
	}
	.services-btn1:hover{
		border: 3px solid #013200;
		border-radius: 10px;
		padding: 10px;
	}
	.services-btn2:hover{
		border: 3px solid #013200;
		background: #3d853c;
		border-radius: 10px;
		padding: 10px;
	}
	
	/*IP POLICY*/
	.ip-policy {
		background-color: #ede5d8;
		padding-top: 10px;
		padding-bottom: 30px;
	}
	.ip-container {
		background-color: white;
		width: 75%;
		margin-left: auto;
		margin-right: auto;
		padding: 40px;
	}
	.ip-policy h2 {
		text-align: center;
	}
	.ip-policy h3 {
		text-align: center;
	}
	.ip-container table {
		margin-left: auto;
		margin-right: auto
	}
	.ip-container th {
		padding: 10px;
	}
	.ip-container td {
		padding: 10px;
	}
	.ip-container a {
		padding: 5px;
		color: #013200;
		background-color: #f7f7cd;
		font-weight: bold;
		text-decoration: none;
	}
	
	.ip-container a:hover{
		color: white;
		background: #013200;
		font-weight: bold;
		font-style: italic;
		outline-style: solid;
		outline-color: #3d853c;
		border-radius: 25px;
	}
	.ip-container ul{
		list-style:none;
	}
	.ip-buttom-column {
		width: 33.33%;
		float: left;
		color: black;
		background-color: white
	}
	/*ktto policy*/
	.ktto-policy {
		background-color: #ede5d8;
		padding-top: 10px;
		padding-bottom: 30px;
	}
	.ktto-container {
		background-color: white;
		width: 75%;
		margin-left: auto;
		margin-right: auto;
		padding: 40px;
	}
	.ktto-policy h2 {
		text-align: center;
	}
	.ktto-policy h3 {
		text-align: center;
	}
	.ktto-container table {
		margin-left: auto;
		margin-right: auto;
	}
	.ktto-container th {
		padding: 10px;
	}
	.ktto-container td {
		padding: 10px;
	}
	.ktto-container a {
		padding: 5px;
		color: #013200;
		background-color: #f7f7cd;
		font-weight: bold;
		text-decoration: none;
	}
	.ktto-container a:hover{
		color: white;
		background: #013200;
		font-weight: bold;
		font-style: italic;
		outline-style: solid;
		outline-color: #3d853c;
		border-radius: 25px;
	}
	.ktto-container ul{
		list-style:none;
	}
	.ktto-buttom-column {
		width: 33.33%;
		float: left;
		color: black;
		background-color: white
	}
	/*events*/
	.events video{
		margin-left: auto;
		margin-right: auto;
		margin-bottom: 50px;
		display: block;
	}
	/*admin login*/
	.login-form{
		padding: 100px;
		background-image: url("home-bg.jpg");
		background-size: cover;
		height: 425px;
		color: white;
	}

	.login-container{
		width: 50%;
		margin-left: auto;
		margin-right: auto;
	}
	.login-container input[type=text], input[type=password] {
		width: 100%;
	  	padding: 12px 20px;
	  	margin: 8px 0;
	  	display: inline-block;
	  	border: 1px solid #ccc;
	  	box-sizing: border-box;
	}

	.login-container button {
	  	background-color: #013200;
	  	color: white;
	  	padding: 14px 20px;
	  	margin: 8px 0;
	  	border: none;
	  	cursor: pointer;
	  	width: 100%;
	  	border-radius: 25px;
	}

	.login-container button:hover {
	  	opacity: 0.8;
	}		
	}
</style>


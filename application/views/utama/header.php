<!DOCTYPE html>
<html>
<head>
	<title>Davis Cam</title>
	<link rel="icon" type="image/png" href="<?php echo base_url() ?>img/logo1.png">

	<link rel="stylesheet" href="<?php echo base_url() ?>asset/css/animations.css">

	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>asset/css/bootstrap.min.css">

	<script src="<?php echo base_url() ?>asset/js/css3-animate-it.js"></script>
	
	<script src="<?php echo base_url() ?>asset/js/jquery.min.js"></script>
	<script src="<?php echo base_url() ?>asset/js/popper.min.js"></script>
	<script src="<?php echo base_url() ?>asset/js/bootstrap.min.js"></script>
	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>asset/googlefont/FrankRuhlLibre-Regular.ttf">
	<link rel="stylesheet" type="text/css" href="asset/font-awesome/css/all.css">

	<meta name="viewport" content="width=device-width,initial-scale=1.0">
</head>
<style>
body {
	position: relative; 
	font-family: 'FrankRuhlLibre-Bold';
}
.carousel-inner img {
	width: 100%;
	height: 100%;
}
.boxa{
	background-color: #f1f1f1;
	height: auto;
	padding: 25px;
	margin: 10px;
}
.boxa:hover{
	box-shadow: 0px 10px 20px 0px rgba(0,0,0,0.2);
	transition: all 1s;
}
.boxb{
	padding: 25px;
	margin: 10px;
	width: 1366px;
	background: url(img/1.jpeg);
	background-position: cover;
	background-attachment: fixed;
	background-repeat: no-repeat;
}
.judul{
	margin: auto;
	border-radius: 40px;
	color: #00FF7F;
	padding: 20px;
	width: auto;
	text-align: center;
	height: 75px;
	background:rgb(34,51,60,0.9);
}
@media screen and (max-width: 450px) {
	.judul {
		height: auto;
	}
}
.parallax{
	background: url(img/Rparallax.png);
	background-attachment: fixed;
	background-position: center;
	background-repeat: no-repeat;
	background-size: cover;
}
.parallax2{
	background: url(img/parallax2.jpg);
	background-attachment: fixed;
	background-position: center;
	background-repeat: no-repeat;
	background-size: cover;
}
input[type=text], input[type=password] {
	width: 100%;
	padding: 12px 20px;
	margin: 8px 0;
	display: inline-block;
	border: 1px solid #ccc;
	box-sizing: border-box;
}

/*css login*/
/* Extra styles for the cancel button */
.containerpadding {
	padding: 16px;
}

span.psw {
	float: right;
	padding-top: 16px;
}

/* The Modal (background) */
.modal {
	display: none; /* Hidden by default */
	position: fixed; /* Stay in place */
	z-index: 1; /* Sit on top */
	left: 0;
	top: 0;
	width: 100%; /* Full width */
	height: 100%; /* Full height */
	overflow: auto; /* Enable scroll if needed */
	background-color: rgb(0,0,0); /* Fallback color */
	background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
	padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
	background-color: #fefefe;
	margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
	border: 1px solid #888;
	width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
	position: absolute;
	right: 25px;
	top: 0;
	color: #000;
	font-size: 35px;
	font-weight: bold;
}

.close:hover,
.close:focus {
	color: red;
	cursor: pointer;
}

/* Add Zoom Animation */
.animate {
	-webkit-animation: animatezoom 0.6s;
	animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
	from {-webkit-transform: scale(0)} 
	to {-webkit-transform: scale(1)}
}

@keyframes animatezoom {
	from {transform: scale(0)} 
	to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
	span.psw {
		display: block;
		float: none;
	}
}

#myBtn {
	display: none;
	position: fixed;
	bottom: 20px;
	right: 30px;
	z-index: 99;
	font-size: 18px;
	border: none;
	outline: none;
	background-color: red;
	color: white;
	cursor: pointer;
	padding: 15px;
	border-radius: 4px;
}

#myBtn:hover {
	background-color: #555;
}
/*end css login*/
/*img hover overlay*/
.imageoverlay {
	display: block;
	width: 100%;
	height: auto;
}

.overlay {
	position: absolute;
	top: 0;
	bottom: 0;
	left: 0;
	right: 0;
	height: 100%;
	width: 100%;
	opacity: 0;
	transition: .5s ease;
	background-color: grey;
}

.containeroverlay:hover .overlay {
	opacity: 0.8;
}

.textoverlay {
	color: white;
	position: absolute;
	top: 50%;
	left: 50%;
	-webkit-transform: translate(-50%, -50%);
	-ms-transform: translate(-50%, -50%);
	transform: translate(-50%, -50%);
	text-align: center;
}
/*end img hover overlay*/

.card {
	margin: 0 auto;
}
.card .carousel-item {
	height: 200px;
}
.card .carousel-caption {
	padding: 0;
	right: 0;
	left: 0;
	color: #3d3d3d;
}
.card .carousel-caption h3 {
	color: #3d3d3d;
}
.card .carousel-caption p {
	line-height: 30px;
}
.card .carousel-caption .col-sm-3 {
	display: flex;
	align-items: center;
}
.card .carousel-caption .col-sm-9 {
	text-align: left;
}
.navi a {
	text-decoration:none;
}
a > .ico {
	background-color: grey;
	padding: 10px;

}
a:hover > .ico {
	background-color: #666;
}
.jumbotron{
	color:white;
}
</style>
<!-- extensi navbar dalam body data-spy="scroll" data-target=".navbar" -->
<body>
	<!-- navbar -->
	<header>
		<nav class="navbar navbar-expand-md navbar-dark fixed-top" style="background-color:#22333C; opacity: 0.9; transition: top 0.3s;" id="navbar">
			<img src="<?php echo base_url() ?>img/logo.png">&nbsp;&nbsp;
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="collapsibleNavbar">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item">
						<a class="nav-link" href="<?php echo site_url() ?>">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo base_url() ?>#section1">Portofolio</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo base_url() ?>#section2">About Me</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo base_url() ?>#section3">Testimonials</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo base_url() ?>#section4">FAQ</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo base_url() ?>#section5">Get In Touch</a>
					</li>
				</ul>
				<button onclick="document.getElementById('id01').style.display='block'" class="btn btn-outline-success my-2 my-sm-0">Login</button>

				<div id="id01" class="modal">

					<form class="modal-content animate" action="/action_page.php">
						<div class="container">
							<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
							<h1>Login</h1>
						</div>

						<div class="containerpadding">
							<label for="uname"><b>Username</b></label>
							<input type="text" placeholder="Enter Username" name="uname" required>

							<label for="psw"><b>Password</b></label>
							<input type="password" placeholder="Enter Password" name="psw" required>
							<div class="custom-control custom-checkbox mb-3">
								<input type="checkbox" class="custom-control-input" id="customCheck" name="remember">
								<label class="custom-control-label" for="customCheck">Remember Me</label>
							</div>
							<button type="submit" class="btn btn-outline-success my-2 my-sm-0">Login</button>

							<button type="submit" class="btn btn-outline-success my-2 my-sm-0">Register</button>

						</div>

						<div class="containerpadding" style="background-color:#f1f1f1">
							<button type="button" class="btn btn-outline-danger my-2 my-sm-0" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
							<span class="psw">Forgot <a href="#">password?</a></span>
						</div>
					</form>
				</div>
			</div>  
		</nav>
	</header>
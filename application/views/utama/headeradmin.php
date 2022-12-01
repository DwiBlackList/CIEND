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
	<style>
	body {
		font-family: "Lato", sans-serif;
	}

	/* Fixed sidenav, full height */
	.sidenav {
		height: 100%;
		width: 200px;
		position: fixed;
		z-index: 1;
		top: 0;
		left: 0;
		background-color: #111;
		overflow-x: hidden;
		padding-top: 20px;
	}

	/* Style the sidenav links and the dropdown button */
	.dropdown-btn {
		padding: 6px 8px 6px 16px;
		text-decoration: none;
		font-size: 20px;
		color: #818181;
		display: block;
		border: none;
		background: none;
		width: 100%;
		text-align: left;
		cursor: pointer;
		outline: none;
	}
	.sidenav p{
		margin: unset;
		padding: 6px 8px 6px 16px;
		text-decoration: none;
		font-size: 20px;
		color: #818181;
		display: block;
		border: none;
		background: none;
		width: 100%;
		text-align: left;
		cursor: pointer;
		outline: none;
	}

	/* On mouse-over */
	.sidenav p:hover, .dropdown-btn:hover {
		color: #f1f1f1;
	}

	/* Main content */
	.main {
		margin-left: 200px; /* Same as the width of the sidenav */
		font-size: 20px; /* Increased text to enable scrolling */
		padding: 0px 10px;
	}

	/* Add an active class to the active dropdown button */
	.active {
		background-color: green;
		color: white;
	}

	/* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
	.dropdown-container {
		display: none;
		background-color: #262626;
		padding-left: 8px;
	}

	/* Optional: Style the caret down icon */
	.fa-caret-down {
		float: right;
		padding-right: 8px;
	}

	/* Some media queries for responsiveness */
	@media screen and (max-height: 450px) {
		.sidenav {padding-top: 15px;}
		.sidenav a {font-size: 18px;}
	}
</style>
</head>
<body>
	<div class="sidenav">
		<h1 style="color: white; font-size: 50px;" align="center">Admin</h1>


		<button class="dropdown-btn">Get In Touch 
			<i class="fa fa-caret-down"></i>
		</button>
		<div class="dropdown-container">
			<p id="viewsgetintouch">Views</p>
			<p id="inputgetintouch">Input</p>
		</div>

		<button class="dropdown-btn">Blog 
			<i class="fa fa-caret-down"></i>
		</button>
		<div class="dropdown-container">
			<p id="viewsblog">Views</p>
			<p id="inputanblog">Input</p>
		</div>

		<button class="dropdown-btn">Testimoni
			<i class="fa fa-caret-down"></i>
		</button>
		<div class="dropdown-container">
			<p id="viewstestimoni">Views</p>
			<p id="inputantestimoni">Input</p>
		</div>

		<button class="dropdown-btn">User
			<i class="fa fa-caret-down"></i>
		</button>
		<div class="dropdown-container">
			<p id="viewsuser">Views</p>
			<p id="inputanuser">Input</p>
		</div>
	</div>
	<div class="main">
<?php 
/**
 * ^title^Modal and Clock JS ^/title^
 * 
 * ^gitRepo^https://github.com/SethKalkstein/ModalAndClock^/gitRepo^
 * 
 * ^tech^JavaScript, CSS, HTML^/tech^
 * 
 * ^highlights^callback functions, setTimeout, setInterval, Modals^/highlights^
 * 
 * ^description^A two-page site that displays a modal after 3 seconds or a clock whose background changes every second based on current time^/description^
 * 
 * ^image^clock.png^/image^
 * 
 * ^path^here^/path^
 * 
 * ^order^6^/order^
 *  
 */
?>
<!DOCTYPE html>

<html>

<head>
	<title>Clock</title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>

<body>
	<header>
		<nav>
			<a href="modal.html">Modal Page</a>
			<a href="index.php">Clock Page</a>
		</nav>
		<div>
			<h1>Project number 4 - The Modal and Digital Clock Site </h1>
		</div>
	</header>

	<main id="clock">
		<div id="clock-wrapper">
			<div id="hours"> </div>
			<div class="colon">:</div>
			<div id="minutes"> </div>
			<div class="colon">:</div>
			<div id="seconds"> </div>
			<div id="ampm"> </div>
		</div>
	</main>

	<footer>
		<h4>&copy; Copyright 2018 - Seth J Kalkstein's Modal and Digital Clock Factory Inc.</h4>
		<h5>&reg;All rights reserved.</h5>
	</footer>

<script type="text/javascript" src="clock.js"></script>

</body>

</html>
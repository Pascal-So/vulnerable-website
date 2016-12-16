<?php

$theme = "light.css";

if(isset($_GET['theme'])){
	$theme = $_GET['theme'];
}

?>

<html>
<head>
	<title>Super awesome website</title>
	<link rel="stylesheet" type="text/css" href="common.css">

	<style>
		<?php
	    	include("themes/" . $theme);
	    ?>
	</style>


</head>
<body>

<header>
	<span>Home</span>
	<span><a href="index.html">Overview</a></span>
	<span><a href="contact.html">Contact</a></span>
</header>

<div class="flex border-faint round-6">
	<a class="block c-2 bg-grey round-6" href="?theme=light.css">Light theme</a>
	<a class="block c-2 bg-grey round-6" href="?theme=dark.css">Dark theme</a>
</div>

<h1>Some website</h1>
<p>
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<br>
<br>


</body>
</html>

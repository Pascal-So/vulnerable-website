<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

$theme = "light.css";

if(isset($_GET['theme'])){
	$theme = $_GET['theme'];
}

if(isset($_POST['name']) && isset($_POST['code'])){
	$filename = "themes/" . $_POST['name'] . ".css";
	$file = fopen($filename, "w");
	if(! $file){
		echo "<br>file error";
	}
	fwrite($file, $_POST['code']);
	fclose($file);
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
	<span><a href="index.html">Home</a></span>
	<span>About</span>
	<span>Contact</span>
</header>

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
<br>
<hr>
<h2>Upload your own theme</h2>
<br>
<form method="post">
	<p>Name</p>
	<input type="text" name="name"><br>
	<p>Code</p>
	<textarea name="code"></textarea><br>
	<input type="submit" value="Upload theme">
</form>

</body>
</html>

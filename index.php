<?php

$theme = "light.css";

//var_dump($_GET);

if(isset($_GET['theme'])){
	$theme = $_GET['theme'];
}

if(isset($_POST['name']) && isset($_POST['code'])){
	$file = fopen("theme/".$_POST['name'] . ".css", 'w');
	fwrite($file, $_POST['code']);
	fclose($file);

}

//echo $theme;

?>

<html>
<head>
	<title>Super awesome website</title>


<style type="text/css">
	body{
		text-align: center;
		font-family: sans;
		max-width: 400px;
		margin: 100px auto;
	}

	header{
		position: fixed;
		top: 0;
		left: 0;
		right: 0;
		
		height: 60px;
	}

	span{
		display: inline-block;
		margin: 20px 30px;
	}

	<?php
	system("ls");
	?>

	
</style>

</head>
<body>

<header>

	<span>Home</span>
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

<form method="post">
	<p>name</p>
<input type="text" name="name"><br>
<p>code:</p>
<textarea name="code"></textarea>
<button></button>>
</form>

</body>
</html>

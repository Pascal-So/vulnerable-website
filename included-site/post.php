<?php  
error_reporting(E_ALL);
ini_set('display_errors', 1);

include("config.php");

$sql = new mysqli($hostname, $username, $password, $database);

function clean_str($str){
	return preg_replace("[^\w .,:/!?()]", "", $str);
}

if(isset($_POST['author']) && isset($_POST['message'])){
	$author = clean($_POST['author']);
	$message = clean($_POST['message']);
	$stm = $sql->prepare_statement("INSERT INTO messages VALUES (?,?)");
	$stm->bind_param("ss", $author, $message);
	$stm->execute();
	$stm->close();
}

?>

<html>
<head>
	<title>Post message</title>
	<link rel="stylesheet" type="text/css" href="common.css">
</head>
<body>

</body>
</html>
<h1>Post message</h1>
<form method="post">
	<p>Author</p>
	<input type="text" name="author"><br>
	<p>Message</p>
	<textarea name="message"></textarea><br>
	<input type="submit" value="Send message">
</form>
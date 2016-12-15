<?php  
error_reporting(E_ALL);
ini_set('display_errors', 1);

include("config.php");

$sql = new mysqli($hostname, $username, $password, $database);

if(isset($_POST['author']) && isset($_POST['message'])){
	$author = $_POST['author'];
	$message = $_POST['message'];
	$stm = $sql->prepare("INSERT INTO messages (author, message) VALUES (?,?)");
	if(! $stm){
	    echo "error";
	}
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

<h1>Post message</h1>
<form method="post">
	<p>Author</p>
	<input type="text" name="author"><br>
	<p>Message</p>
	<textarea name="message"></textarea><br>
	<input type="submit" value="Send message">
</form>



</body>
</html>
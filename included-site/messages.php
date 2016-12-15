<html>
<head>
	<title>Messages</title>
	<link rel="stylesheet" type="text/css" href="common.css">
</head>
<body>

<h1>Messages</h1>


<?php
include('config.php');

$sql = new mysqli($hostname, $username, $password, $database);
/*

$result = $sql->query("SELECT author, message FROM messages");
while($row = $result->fetch_assoc()){
?>

	<h3 style="margin-bottom:0px;"><?php echo htmlspecialchars($row["author"]); ?></h3>
	<p><?php echo htmlspecialchars($row["message"]); ?></p>
	<br>

<?php
}


$sql->close();
*/
?>

<br>
<br>
<p>Post your own messages here: <a href="asd">path/to/postsite</a></p>
<br>
<br>
<br>
</body>
</html>
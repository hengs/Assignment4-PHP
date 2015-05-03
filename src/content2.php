<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
//header('Content-Type: text/plain');
session_start();
if(!$_SESSION["username"]){
	echo "You are not logged in!";
	header("Location: login.php");
	die();
}
?>

<!DOCTYPE html>
<html>
	<title>content2.php</title>
	<body>
		<p> Please return to previous page<br/>
	
		<a href='content1.php'>Go Back</a>
	</p>


	</body>
</html>


<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
//header('Content-Type: text/plain');
//session_start();


session_start();  //always use, stores data in cookie


if(session_status() == PHP_SESSION_ACTIVE){
	/*
	if(isset($_REQUEST['username']) && ($_REQUEST['username'] !== $_POST['username'])) 
	{
		echo "Already logged in as $_SESSION[username].";
		echo "<a href='login.php?action=logout'>Log out</a>";
		exit();
	}
	*/
	if(isset($_POST['username']))
	{
		$_SESSION['username'] = $_POST['username'];
	}

	if(!isset($_SESSION['visits']))
	{
		$_SESSION['visits'] = 0;
	}

	$_SESSION['visits']++;
	echo "Hi $_SESSION[username], you have visited this page $_SESSION[visits] times. \n";
	//echo "<button type = 'button' onclick = a href='login.php?action=logout'>Logout</button>";
	//echo "Logout<a href = 'login.php?action=logout'>";
	//echo "Next Page <a href= 'content2.php'>";
}
?>

<!DOCTYPE html>
<html>
	<title>content1.php</title>
	<body>
		
	
		<p><a href = 'login.php?action=logout'>Log Out<br/></a></p>
		<p><a href= 'content2.php'>Next Page </a></p>

		


	</body>
</html>


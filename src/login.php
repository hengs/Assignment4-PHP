<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
//header('Content-Type: text/plain');
session_start();

if(isset($_REQUEST['action']) && $_REQUEST['action'] === 'logout'){
	$_SESSION = array();
	session_unset();
	session_destroy();
	header("Location: login.php");
	die();
}
	?>


<!DOCTYPE html>
<html>
	<header>
		<title>Login Page</title>
	</head>
<body>
	<?php

		echo "<form action ='content1.php' method = 'post'>";

		echo "Username: <input type='text' name='username'/>";
		echo "<input type='submit' value = 'login'/>";

		echo "</form>";
	?>
</body>
</html>




			?>

	
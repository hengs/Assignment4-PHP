
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
//header('Content-Type: text/plain');

$type = $_SERVER['REQUEST_METHOD'];

if(($type!="GET") || ($type!="POST"))
	exit(1);

$parameters = array();
	
if($type=='GET'){
	foreach($_GET as $key => $value){
		$parameters[$key] = $value;
	}
}
if($type=='POST'){
	foreach($_POST as $key => $value){
		$parameters[$key] = $value;
	}
}

if(empty($parameters)){
	$parameters = null;
}

$results = array('Type' => $type, 'parameters' => $parameters);
echo json_encode($results);
			?>

	
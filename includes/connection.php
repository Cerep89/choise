<?php
include('constants.php');

// 1 step - make connection to server
$connection = new PDO(
	'mysql:host='.DB_HOST.'; 
	 dbname='.DB_NAME.'; charset=UTF8',
	 USER, PASS);
// show if connection successfully
if(null !== $connection->setAttribute
	(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION)
){	
	//$connection->query('SET' names UTF8');
	//echo "Connection successfully";
}else{
	echo "Connection failed".$e->getMessage();
	die();
}

?>
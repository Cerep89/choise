<?php
	session_start();
	// 1-st mode of clearing session
	// $_SESSION = array(); 

	// 2-st mode
	session_destroy();
	header("Location: index.php");
	exit;

	// 3-st mode
	/*if(isset($_COOKIE[session_name()])){
		setcookie(session_name(), '', time()-2500);
	}*/
?>
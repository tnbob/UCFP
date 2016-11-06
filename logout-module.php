<?php session_start();
	$ipaddr = $_SERVER['REMOTE_ADDR'];	
	$user = $_SESSION[session_id()];
	if($user && strcmp($user['ipaddr'], $ipaddr) == 0) {
		unset($_SESSION[session_id()]);
	}
    header("Location: /land.php"); 
	//TODO Surprise future teller
	//Facts teller
	
?>

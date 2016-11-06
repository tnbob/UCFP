<?php
	//If already loggedIn redirect to user home
	session_start(); 
	require_once($_SERVER['DOCUMENT_ROOT']."/global-utils.php");	
	$isLoggedIn = isLoggedIn();
	if($isLoggedIn) {
		header('Location: /user-home-module.php');
		return;
	}
	$emailID 	= $_POST["email"];
	$password 	= $_POST["password"];

	//printf("debug: %s %s\n", $emailID, $password);
	$con = mysql_connect("localhost","dharm","passwd") or  die('Could not connect: ' . mysql_error());
	mysql_select_db("ucfp") or die('Can not find db: ' . mysql_error());
	$query = sprintf("SELECT token,salt,id FROM staff WHERE emailID = '%s'", mysql_real_escape_string($emailID)); 
	$ret = mysql_query($query)  or die("can not run " . mysql_error());
	$exists =  mysql_num_rows($ret); 

	if($exists) {
		$user = mysql_fetch_array($ret);
		$token = $user[0];
		$salt = $user[1];
		if(strcmp($token, md5($password . $salt)) == 0) {
			//printf("login succeeded.\n");
			//login is successful, restart session
			//$ret = session_start();
			//login is successful, now set session variables
			setSessionVars($user[2], $ret);
			header('Location: /user-home-module.php');
		} else {
			//incorrect password
			header("Location: /standalone-signin-module.php?slf=1");
		} 
	} else {
		//User does not exist
		//header("Location: /standalone-signin-module.php?slf=1");
	}

	function setSessionVars($userID, $ret) {
		//There is a secutiry concern in this way
		//http://php.net/manual/en/reserved.variables.session.php
		if (isset($_REQUEST['_SESSION'])) die("Get lost Muppet!"); 
		session_regenerate_id();
		$sessionID = session_id();
		$ipaddress = $_SERVER['REMOTE_ADDR'];
		$_SESSION [$sessionID] = array('ipaddr' => $ipaddress, 'uid' => $userID);
	}
	?>

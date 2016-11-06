<?php 
	require_once("DatabaseHandler.php");
	require_once("UserHandler.php");

	$emailID 	= $_REQUEST["email"];
	$password 	= $_REQUEST["password"];
	$name 		= $_REQUEST["name"];
	$address 	= $_REQUEST["address"];
	$refKey 	= $_REQUEST["refKey"];
	$salt		= mt_rand (121, 112211);

	$result = array('heading' => "Congratulations!", 
					'message' => "Signup is successful.", 
					'cssClass' => "alert alert-success pull-left");
	$error = false;
	if(strcmp($refKey, "UCFPS") != 0 ) {
		$error = true;
		setError($result, "Invalid reference key");
	}
	if(!$error) {
		//Checking if user already exists
		$exists = UserHandler::userExistsByEmailID($emailID);
		if($exists) {
			$error = true;
			setError($result, "User already exists.");
		}
	}
	if(!$error) {

		//Insert new user
		$databaseHandler = DatabaseHandler::getInstance();
		$query = sprintf("INSERT INTO staff (name, emailID, token, salt, address, refKey) 
			VALUES('%s', '%s', '%s', '%s', '%s', '%s')", 
			mysql_real_escape_string($name),  
			mysql_real_escape_string($emailID), 
			mysql_real_escape_string(md5($password . $salt)), 
			mysql_real_escape_string($salt), 
			mysql_real_escape_string($address), 
			mysql_real_escape_string($refKey)
			);

		$ret = $databaseHandler->executeQuery($query);
		if(!$ret) {
			$error = true;
			setError($resutl, "Internal error, please try later.");
		} else {
			//update status in invite table
			//$invitationHandler->markRegistered($emailID);
		}

	}
	function setError(&$result, $msg) {
		$result['cssClass'] = "alert alert-error pull-left";
		$result['heading'] = "Error!";	
		$result['message'] = $msg;
	}	
?>
<div class='<?=$result['cssClass']?>'>
<button class="close" data-dismiss="alert" type="button">×</button>
<strong><?=$result['heading']?></strong>
<?=$result['message']?>
<br/>
</div>

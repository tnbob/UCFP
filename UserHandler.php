<?php

class UserHandler {

	public static function getUserName($userID) {
		//TODO: complete implementation	
		$query = sprintf("select name from user where id=%d", $userID);
	}

	public static function getUserEmailID($userID) {
		//TODO: complete implementation	
		$query = sprintf("select emailID from user where id=%d", $userID);
	}

	public static function getUserDetails($userID) {
		mysql_connect("localhost","dharm","passwd") or  die('Could not connect: ' . mysql_error());
		mysql_select_db("ucfp") or die('Can not find db: ' . mysql_error());
		$query = sprintf("select name,emailID,cellID,address from user where id=%d", $userID);
		$result = mysql_query($query) or die("can not run " . mysql_error());
		$user = NULL;
		if(mysql_num_rows($result) == 1) {
			$user = mysql_fetch_array($result);
		}
		return $user;
	}
	public static function getUserCount($cellID) {
		mysql_connect("localhost","dharm","passwd") or  die('Could not connect: ' . mysql_error());
		mysql_select_db("ucfp") or die('Can not find db: ' . mysql_error());
		$query = sprintf("select count(id) from staff");
		$result = mysql_query($query) or die("can not run " . mysql_error());
		$count = 0;
		if(mysql_num_rows($result) == 1) {
			//$count = mysql_fetch_row($result)[0];
		}
		return $count;
	}

	public static function userExistsByEmailID($emailID) {
		mysql_connect("localhost","dharm","passwd") or  die('Could not connect: ' . mysql_error());
		mysql_select_db("ucfp") or die('Can not find db: ' . mysql_error());
		$query = sprintf("SELECT count(id) FROM staff WHERE emailID='%s'", mysql_real_escape_string($emailID));
		$rows = mysql_query($query) or die ("can not run " . mysql_error());
		$row = mysql_fetch_row($rows);
		if($row && $row[0] == 1) {
			return true;
		} else {
			return false;
		}
	
	}
}
?>

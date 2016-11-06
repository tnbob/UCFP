<?php
require_once('DatabaseHandler.php');

class CUHandler {
	public function persistCU($emailID, $subject, $message) {
		$dbHandler = DatabaseHandler::getInstance();
		$query = sprintf("INSERT INTO contact(emailID, subject, message, time) VALUES('%s', '%s', '%s', '%d')", 
		mysql_real_escape_string($emailID),
		mysql_real_escape_string($subject),
		mysql_real_escape_string($message),
		time()
		);		

		$ret = $dbHandler->executeQuery($query);
		return $ret ? 0 : 1;
	}
}

?>

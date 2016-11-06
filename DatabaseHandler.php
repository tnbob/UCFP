<?php 
//Singleton database handler
class DatabaseHandler {
		
	const DBSERVER = "localhost";
	const DBUSER   = "dharm";
	const DBPASSWD = "passwd";
	const DATABASE = "ucfp";

	private function __construct() {
		$con = mysql_connect(DatabaseHandler::DBSERVER, DatabaseHandler::DBUSER, DatabaseHandler::DBPASSWD) 
					or  die('Could not connect: ' . mysql_error());
		mysql_select_db(DatabaseHandler::DATABASE) or die('Can not find db: ' . mysql_error());
	}

	//This is suboptimal and we need to improve a lot on database connections handling
	public function executeQuery($query) {
		$ret = mysql_query($query) or die("can not run" . mysql_error());
		return $ret;
	}	

	public function getNumRows($result) {
		return mysql_num_rows($result); 	
	}

	public function getRowFromResultSet($result) {
		return mysql_fetch_row($result);
	}

	public static function getInstance() {
		static $instance = NULL;
		if($instance === NULL) {
			$instance = new DatabaseHandler();
		}

		return $instance;
	}
}
?>

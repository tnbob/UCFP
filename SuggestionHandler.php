<?php 
error_reporting(E_ALL);
require_once("UserHandler.php");
require_once("DatabaseHandler.php");
//TODO: Error codes instead of these magic numbers
class SuggestionHandler {
	private $databaseHandler = NULL;
	const MAX_SUGGESTION_LIMIT = 5;

	public function __construct() {
		$this->databaseHandler = DatabaseHandler::getInstance();
	}
	//Return value
	//Success : 0
	//Too many suggestions: 3
	//Error : 20
	public function persistSuggestion($uid, $subject, $suggestion) {
		if(!($uid && $subject&&$suggestion)) {
			return 20;
		}	
		$numOfSuggestions = $this->getSuggestionCount($uid);
		if($numOfSuggestions > SuggestionHandler::MAX_SUGGESTION_LIMIT) {
			//Too many suggestions
			return 3;
		}
		$query = sprintf("INSERT INTO suggestion (uid, subject, suggestion, time) VALUES('%d', '%s', '%s', '%d')" ,
				$uid,
				mysql_real_escape_string($subject),
				mysql_real_escape_string($suggestion),
				time()
			);	
		$ret = $this->databaseHandler->executeQuery($query);
		if(!$ret) {
			return 20;
		}
		return 0; //SUCCESS
	}	

	private function getSuggestionCount($uid) {
		//get number of suggetion made by a user in 24hrs time window 
		$query = sprintf("SELECT count(uid) FROM suggestion WHERE uid='%d' && (('%d' - time)<86400)", $uid, time());
		$ret = $this->databaseHandler->executeQuery($query);
		return mysql_num_rows($ret);
	}	

}

?>

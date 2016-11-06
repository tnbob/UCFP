<?php
   	function horizontalDivider() {
    	print "<ul class=\"nav nav-list hdivider\">";
    	print "<li class=\"divider\"></li>";
    	print "</ul>";
	}

	function executeModule($moduleName) {
		include ($_SERVER['DOCUMENT_ROOT']."/".$moduleName);
	}
	function getModuleHTML($moduleName) {
		ob_start();
		executeModule($moduleName);
		$html = ob_get_clean();

		return $html;
	}

	function nextLot() {
		//print "<ul class=\"pager\"><li class=\"next\"><a href=\"#\">Next &rarr;</a></li></ul>";
		print "<div id=\"prev\" class=\"rotateNob\"><a href=\"#\"></a></div>";
	}
	function prevLot() {
		//print "<ul class=\"pager\"><li class=\"previous\"><a href=\"#\">Back &larr;</a></li></ul>";
		print "<div id=\"next\" class=\"rotateNob\"><a href=\"#\"></a></div>";
	}
	function isLoggedIn() {
		$ret = false;	
		$user = (isset($_SESSION[session_id()]) ? $_SESSION[session_id()]: null);
		$ipaddr = $_SERVER['REMOTE_ADDR'];
		if($user && strcmp($ipaddr, $user['ipaddr']) == 0) $ret = true;
		return $ret;
	}
?>

<?php session_start(); 
	include($_SERVER['DOCUMENT_ROOT']."/global-utils.php");	
	$isLoggedIn = isLoggedIn();
	if($isLoggedIn) {
		header('Location: /user-home-module.php');	
		return;
	}
?>
<!DOCTYPE html>
<html>
<head>
	<!--<link rel="stylesheet" type="text/css" media="screen" href="./assests/map-stylesheet.css"> -->
 	<link rel="stylesheet" type="text/css" href="./assests/bootstrap/css/bootstrap.css">
  	<link rel="stylesheet" type="text/css" href="./assests/bootstrap/css/bootstrap-responsive.css">
  	<link rel="stylesheet" type="text/css" href="./assests/7r.css">
  	<script type="text/javascript" src="./scripts/jquery-1.8.3.js"></script>
  	<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>-->
  	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&libraries=places"></script>
	<script type="text/javascript" src="./scripts/geocomplete/jquery.geocomplete.js"></script>
	<script type="text/javascript" src="./scripts/geocomplete/logger.js"></script>
   	<script type="text/javascript" src="./assests/bootstrap/js/bootstrap.js"></script>  
	<script type="text/javascript" src="./scripts/inputvalidation.js"></script>
	<script type="text/javascript" src="./scripts/PopoverFormHandler.js"></script>  
   	<!--<script type="text/javascript" src="./scripts/jcrypt/jquery.jcryption.js"></script>-->
</head>
<body>
	<?php executeModule("nav-module.php") ?>
<div class="container-fluid">
	<div class="row-fluid">
	<?php executeModule("concept-carousel-module.php"); ?>	
	</div>
</div>
<div class="row-fluid">
<?php 
	horizontalDivider();
	executeModule("footer-module.php");
	horizontalDivider();
?>
</div>
</body>
</html>

<?php 
	session_start(); 
	require_once($_SERVER['DOCUMENT_ROOT']."/global-utils.php");	
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
	<script type="text/javascript" src="./scripts/PopoverFormHandler.js"></script>  
	<script type="text/javascript" src="./scripts/inputvalidation.js"></script>
   	<!--<script type="text/javascript" src="./scripts/jcrypt/jquery.jcryption.js"></script>-->
</head>
<body>
<?php
	executeModule("nav-module.php"); 
?>
<div class="container-fluid">
	<div class="row-fluid">
		 <div class="span2">
		 </div>

		 <div class="span6">
			<p class="lead">Privacy</p>
			<p	style="line-height:30px; font-size:16px;">
			We do not share any of members personal information with any third party. We store minimum information required.</p> 
			Please use <a href="contactus-module.php">contant us</a> for ask any questions and clarifications regarding privacy policy.

			</p>
		 <div>
	</div>
	<div class="row-fluid">
	<?php 
		horizontalDivider();
		executeModule("footer-module.php");
		horizontalDivider();
	?>
	</div>
</div>
</body>
</html>

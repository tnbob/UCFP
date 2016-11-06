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
	require_once('global-utils.php');	
	executeModule("nav-module.php"); 
?>
<div class="container-fluid">
	<div class="row-fluid">
		 <div class="span2">
		 </div>

		 <div class="span6">
			<p class="lead">Privacy</p>
			<p	style="line-height:30px; font-size:16px;">
			Please read our <a href="privacy.php">privacy policy.</a><br/>
			You are solely responsible for contents you post and for any consequences thereof.<br/>
			We reserve right to remove any content if required by law or voilating our policy.<br/>
			If you choose to use our services, you accept of terms & policy and forms a binding contract with us. 
			</p>
			<p	style="line-height:30px; font-size:16px;">
			Republishing of any data is not allowed unless published through our API. If you are any content and publish elsewhere it may initiate legal action against you.	
			</p>
			<p	style="line-height:30px; font-size:16px;">
			Please use <a href="contactus-module.php">contant us</a> for ask any questions and clarifications regarding terms.
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

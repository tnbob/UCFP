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
				<strong>Echo: </strong>When you send an 'Echo' it is visible to all members in your circle. Hence you must not share any sensitive information while sending an 'Echo'. 
	<br/><strong>Message: </strong>When you send a message to a particular member of your circle, it is visible to only that particular member. It depends of you what to share with any member in your circle.
			</p>
			<p	style="line-height:30px; font-size:16px;">
			We strive to stop spamming and any marketing effort from any member. We also filter inapproaprite contents. 
			</p>
			<p	style="line-height:30px; font-size:16px;">
			We do not share any of members personal information with any third party. We store minimum information about our members to connect with relevant people and show only relevant echo from all circles. <br/>
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

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
   	<script type="text/javascript" src="./scripts/jcrypt/jquery.jcryption.js"></script>
	<script type="text/javascript" src="./scripts/inputvalidation.js"></script>
	<script type="text/javascript" src="./scripts/PopoverFormHandler.js"></script>  
</head>

<body>
	<?php require_once($_SERVER['DOCUMENT_ROOT']."/global-utils.php") ?>
	<?php executeModule("nav-module.php") ?>
	<div class="row-fluid">		
		<div class="span1"></div>
		<div class="span10 hero-unit" style="margin-top:30px; padding:10px; font-size:16px; line-height:20px">
			<p>This is staff signup page, after signup you'll be able to login and register or distribute food to residents</p>	
		</div>
		<div class="span1"></div>
	
	</div>
	<div class="row-fluid">		
		<div class="span1"></div>
		<div class="span3">
			<?php executeModule("signup-module.php") ?>
		</div>
		<div class="span7">
			<?php executeModule("addressmap-module.php") ?>
		</div>
		<div class="span1"></div>
	</div>
	<div class="row-fluid">		
		<div class="span1"></div>
		<div class="span10 hero-unit" style="margin-top:30px">
		</div>
		<div class="span1"></div>
	
	</div>
</body>
</html>

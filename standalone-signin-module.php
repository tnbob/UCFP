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
<?php 
		include($_SERVER['DOCUMENT_ROOT']."/global-utils.php");	
		executeModule("nav-module.php"); 
	?>
	
<div class="container-fluid">
	<div class="row-fluid">
		<div class="span3"></div>
		<div class="span5">
			<div id="siginError" class='alert alert-error pull-left'>
				<button class="close" data-dismiss="alert" type="button">&times;</button>
				<strong>Error :</strong>
				username or password is wrong.
			</div>
			<form class="signin-standalone form-horizontal" method="post" action="login.php">
				<div class="control-group">
				<label class="control-label" for="inputEmail">Email</label>
				<div class="controls">
				<input name="email" type="text" placeholder="Email">
				</div>
				</div>
				<div class="control-group">
				<label class="control-label" for="inputPassword">Password</label>
				<div class="controls">
				<input name="password" type="password" placeholder="Password">
				</div>
				</div>
				<div class="control-group">
				<div class="controls">
				<!--<label class="checkbox">
				<input type="checkbox"> Remember me
				</label>-->
				<button type="submit" class="btn btn-primary">Sign in</button>
				</div>
				</div>
			</form>
		</div>
		</body>
</html>

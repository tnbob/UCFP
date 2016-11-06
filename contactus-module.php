<?php session_start() ?>
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
	<?php include($_SERVER['DOCUMENT_ROOT']."/global-utils.php");?>	
	<?php executeModule("nav-module.php") ?>
<div class="container-fluid">
	<div class="row-fluid">
		<div class="span3"></div>
		<div class="span6">
			<p class="lead">Contact Us</p>
			<form class="contactus form-horizontal" method="post" action="#">
				<div id="cuRespID"></div>
				<div class=" control-group controls">
					<input id="emailID" name="email" class="input-xlarge" type="text" placeholder="Your email id">
					<span class="error"> </span>
				</div>
				<div class=" control-group controls">
					<input id="subjectText" class="input-xlarge" name="subject" type="text" placeholder="Subject">
					<span class="error"> </span>
				</div>
				<div class="control-group controls">
					<textarea  id="messageText" placeholder="Type your reply here" class="field span12" 
						rows="10" maxlength="2048" spellcheck="true"></textarea>
					<span class="error"> </span>
				</div>
				<div class="control-group controls">
					<button id="contactUsSubmit" type="submit" class="btn btn-primary">Submit</button>
				</div>
			</form>
		</div>
	</div>	
	<div class="row-fluid" style="margin-top:70px;">
	<?php 
		horizontalDivider();
		executeModule("footer-module.php");
		horizontalDivider();
	?>
	</div>
		<script type="text/javascript">
		function cuAjaxCallback(resp, status, httpXhr) {
			$('#cuRespID').html(resp);
			$('#emailID').val('');
			$('#subjectText').val('');
			$('#messageText').val('');
		}
		$('#contactUsSubmit').click(function(event) {
			var v = $('#messageText').val();
			if(validateEmailID('emailID', 'Invalid email id.') ||  
				validateMessage('subjectText', 'Subject at least 20 characters required.') ||
				validateMessage('messageText', 'Message is too short.')) {
					event.preventDefault();
					return false;
				}	
				var emailID = $('#emailID').val();
				var subject = $('#subjectText').val();
				var message = $('#messageText').val();

				url1="/post-contactus-module.php?email="+emailID+"&subject="+subject+"&message="+message;
				processAjaxReq(url1, cuAjaxCallback);
				event.preventDefault();
		});
		//Add ajax call support to persist 'CU' in database
		//Add status notification of ajax call to user
		</script>
		</body>
</html>

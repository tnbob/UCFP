<?php session_start(); 
	include($_SERVER['DOCUMENT_ROOT']."/global-utils.php");	
	$isLoggedIn = isLoggedIn();
	if($isLoggedIn) {
		header('Location: /user-home-module.php');	
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
   	<!--<script type="text/javascript" src="./scripts/jcrypt/jquery.jcryption.js"></script>-->
</head>
<body>
	<?php executeModule("nav-module.php") ?>
<div class="container-fluid">
	<div class="row-fluid">		
		<div class="span3">
			<?php executeModule("signup-module.php") ?>
		</div>
	</div>
	<div class="row-fluid">
		<?php 
			horizontalDivider();
			//executeModule("concept-module.php") 
		?>
	</div>
</div>
<div class="row-fluid">
<?php 
	horizontalDivider();
	executeModule("footer-module.php");
	horizontalDivider();
?>
</div>

<script type="text/javascript">
	$(function() 
	{
		//regular expression for all the fields
		var ck_username = /^[A-Za-z0-9_]{5,20}$/;
		var ck_email = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i 
		var ck_password =  /^[A-Za-z0-9!~@#$%^&amp;*()_]{6,20}$/;
		var ck_phone = /^[0-9-]{10,20}$/;
		var ck_pinCode = /^[0-9]{6}$/;
		//This function will be called for each key pressed in the username field 
		$('#username').keyup(function()
		{
			var username=$(this).val();
			if (!ck_username.test(username)) 
			{
			 	$(this).next().show().html("Minimum 5 characters");
			}
			else
			{
				$(this).next().hide();
				$("li").next("li.password").slideDown({duration: 'slow',easing: 'easeOutElastic'});
			}
		});
		//This function will be called for each key pressed in the password field
		$('#password').keyup(function()
		{
			var password=$(this).val();
			if (!ck_password.test(password)) 
			{
			 	$(this).next().show().html("Minimum 6 Characters");
			}
			else
			{
				$(this).next().hide();
				$("li").next("li.email").slideDown({duration: 'slow',easing: 'easeOutElastic'});
			}
		});
		//This function will be called for each key pressed in the email field
		$('#email').keyup(function()
		{
			var email=$(this).val();
			if (!ck_email.test(email)) 
			{
			 	$(this).next().show().html("Enter valid email");
			}
			else
			{
				$(this).next().hide();
				$("li").next("li.phone").slideDown({duration: 'slow',easing: 'easeOutElastic'});
			}
		});
		//This function will be called for each key pressed in the phone number field
		$('#phone').keyup(function()
		{
			var phone=$(this).val();
			if (!ck_phone.test(phone)) 
			{
			 	$(this).next().show().html("Minimum 10 numbers");
			}
			else
			{
				$(this).next().hide();
				$("li").next("li.submit").slideDown({duration: 'slow',easing: 'easeOutElastic'});
			}
		});

		//when we register it will show the status.
		$('#submit').click(function()
		{
			alert("I am in checking entered values block");
			var email=$("#email").val();
			var password=$("#password").val();
			
			if(ck_email.test(email) && ck_password.test(password))
			{
				return false;
			}			
		});
	})
</script>
</body>
</html>

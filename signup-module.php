<?php 
$signupHelpMessage = "<h5>Referral Key:</h5> Signup is referral basis and anyone of your friend, family member or neighbour can refer you. Once they refer you, a key is generated.
<br/><h5>Email-ID:</h5> Your email id.
<br/><h5>Password:</h5> At least 8 characters long password is required.
<br/><h5>Address:</h5> This is your current address of residence. This is very important because of the basis of your address we connect you with your neighbours.";
?>
<!-- Signup form starts here -->
<div id="signup-form" class="newuser-signup">
	<form id="form-elements" method="post" action="#">
		<p class="signup-text"> New staff member</p>
		<p class="signup-text-secondry"> Sign up</p>
		<div class="signup-outer">		
		<input class="refkey" id="refkey" name="refKey" type="text" placeholder="referral key"></input>
		<span class="error"> </span>

		<input class="name" id="name" name="name" type="text" placeholder="your name"></input>
		<span class="error"> </span>
		
		<input class="email" id="email" name="email" type="text" placeholder="email-id"></input>
		<span class="error"> </span>

		<input class="password" id="password" name="password" type="password" placeholder="password"></input>
		<span class="error"> </span>
		
		<input class="address" id="address" name="address" type="text" placeholder="address"></input>
		<span class="error"> </span>

		<input id="lat" name="lat" type="hidden" value="-1"></input>
		<input id="lng" name="lng" type="hidden" value="-1"></input>

		<button class="btn btn-primary" id="submitMain" type="submit" value="submit"/>Sign up 	</button>
		<a id="signupHelp" class="helpText" href="#" data-html="true" data-content='<?=$signupHelpMessage?>'  data-title="Singup Help!" data-trigger="hover" > Help? </a>
		</div>
	</form>
</div>
<div id="signupRespModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-header">
	<h5 id="myModalLabel">Signup status</h5>
	</div>
	<div id="signupRespDiv" class="modal-body">
	</div>
	<div class="modal-footer">
	<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
	</div>
</div>
<!-- Signup form endhere -->

<script type="text/javascript">
		$("#signupHelp").popover();
		$("#signupHelp").click(function(event) {
				event.preventDefault();
		});
		function validateSignUpForm(event) {
			validationPatterns	= new ValidationPatterns();
			//var user = validateInput('', validationPatterns.ck_name, 'Minimum 8 characters');
			var refkey = validateInput('refkey', validationPatterns.ck_refKey, 'Invalid reference key');
			var email  = validateInput('email', validationPatterns.ck_email, 'Invalid email id');
			var passwd = validateInput('password', validationPatterns.ck_password, 'Minimum 6 characters');
			var address = validateInput('address', validationPatterns.ck_address, 'Minimum 20 characters');
			if(refkey || email || passwd || address) {
				event.preventDefault();
				return false;
			}	
			return true;	
		}
		function signupAjaxCallback(resp, status, httpXhr) {
			$('#signupRespDiv').empty().append(resp);
			$('#signupRespModal').modal('show');
		}
		$('#submitMain').click(function(event) {
			if(validateSignUpForm(event)) {
				var refkey = $('#refkey').val();
				var email  = $('#email').val();
				var passwd = $('#password').val();
				var address = $('#address').val();
				var name = $('#name').val();
				var lat = $('#lat').val();
				var lng = $('#lng').val();
				var url1 = "/tunnel.php?email="+email+"&password="+passwd + "&name="+name+"&refKey="+refkey+"&address="+address+"&lat="+lat+"&lng="+lng;	
				processAjaxReq(url1, signupAjaxCallback);
			}
			return false;
		});
</script>

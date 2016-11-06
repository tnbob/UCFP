<?php 
	require_once("Config.php");
	$loggedIn = isLoggedIn();
	$reports = "report-module.php";
	$residenSignup= "resident-signup-module.php";
	$signupLink = "standalone-signup-module.php";
	$home = NULL;
	if($loggedIn) {
		$suppressLoginForm = true;
		$home = "user-home-module.php";
	} else {
		$home = "land.php";
		$suppressLoginForm = $_REQUEST['slf'];
	}
?>
<div class="navbar navbar-inverse">
	<div class="navbar-inner">
		<div class="container">
		<a id="companyName" class="brand" href="#"><?=Config::companyName?></a>
  		<div class="nav-collapse collapse navbar-inverse-collapse">
  		<ul class="nav">
				<?php if($loggedIn):?>
  		  		<li><a href=<?=$home?> >Home</a></li>
				<li><a href=<?=$residenSignup?> >Register</a></li>");
				<li><a href=<?=$reports?> >Reports</a></li>");
				<?php endif?>
  		</ul>
  		</div>
		<?php 
			if(!$suppressLoginForm) {
				echo("<a href=\"$signupLink\" class=\"navbar-signup pull-right\">New staff: Sign up here</a>");
				include("./nav-signin-from.php");	
			} 
			if($loggedIn) {
				include("./user-menu.php");
			}
		?>	
    	</div>
	</div>
 </div>

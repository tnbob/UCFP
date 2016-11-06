<?php	session_start(); ?>
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
			<p class="lead">Concept</p>
			<p	style="line-height:30px; font-size:16px;">
We believe that there is a disconnect between people living on the same street or even in same apartments. If people are aware of each other then they can get mutually benefited. People have several needs and questions which can be better answered by people living on same street.</p> 


<p	style="line-height:30px; font-size:16px;">
If people living on same street are connected then they can share their unrequired resources like neighbours can exchange books.
Some of the questions which frequently come up which can be better answered by local people only are 
<ul>
<li>Is there any good mathematics teacher for kids nearby?</li>
<li>What are good play schools in our locality?</li>
<li>Is there anybody who play badminton? I need someone to play with in evening hours.</li>
</ul>
</p>
<hr/>
<p	style="line-height:30px; font-size:16px;">
Problems always exists in any locality. Common problems required collaboration between local people to solve them. Through this platfrom people can solve common problems like water issue, road condition or even non functional street lamps.</p>  

<p	style="line-height:30px; font-size:16px;">
Any problem which you are stuck with and need in person attention only local people can solve them. You can allow trustworthy local people to solve problems for you.</p>

<hr/>
<p	style="line-height:30px; font-size:16px;">
We are building a platform and tools which facilitate local people to connect with each other, broadcast their problems, need and questions to people around them. Our platfrom provide one to one communication between two people living nearby and broadcast to all as well.</p>

<p	style="line-height:30px; font-size:16px;">
<strong>How we have solved this problem: </strong>
<br/>
Given you building address we draw a circle of 3.5KM radius. And all members in that circle is considered in same circle. We choose 3.5KM because we believe that is good distance to find right people to solve problem and resources you need. <br/>
This circle is called RotateWave circle. And you as a member of this circle can send message and recieve message from any member in this circle. </p>
<p	style="line-height:30px; font-size:16px;">
<br/><strong>Some terminology: </strong>
<br/><strong>RotateWave Circle: </strong> Circle around you of 3.5KM radius.
<br/><strong>Echo: </strong> means broadcast(/send) message to all members in your RotateWave circle.
<br/><strong> Message: </strong> means send message to individual member in your RotateWave circle.
</p>
<p	style="line-height:30px; font-size:16px;">
If sounds interesting, find someone who is already on RotateCircle because currently registeration is through reference only.
</p>
</div>
		 <div class="span3" style="margin-left:70px; margin-top:50px">
			<?php if(!isLoggedIn()) {
					executeModule("explore-adv-module.php");
				}
			?>
		 </div>
</div>
<?php
	horizontalDivider();
	executeModule("footer-module.php"); 
	horizontalDivider();
?>
</body>
</html>


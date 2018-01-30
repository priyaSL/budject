<?php
include("forum.php"); 
?><?php session_start(); include "functions/conn.php";
if(isset($_SESSION['email'])){
	if ($_SESSION['email']){
		header("location:http:users/");
	}
}
?>
<!DOCTYPE html>
<!--[IF IE]>
 <script>alert("Your browser is not compatible in this website.\nPlease run our website in Chrome (Recommended) or Mozilla.")
window.location='https://www.google.com/intl/en/chrome/browser/index.html#eula'
</script>
<![endif]-->
<html>
<head>
<title>Welcome to Budget Approval System</title>

<meta name="keywords" content="reservation">
<link rel="icon" href="img/logo.png" type="image/x-png" /> 
<link rel="stylesheet" type="text/css" href="css/layout.css" media="all"/>
<link rel="stylesheet" type="text/css" href="css/nav.css" media="all"/>
<link rel="stylesheet" type="text/css" href="css/requirements.css" media="all"/>
<link rel="stylesheet" type="text/css" href="css/alertbox.css"/>
<link rel="stylesheet" type="text/css" href="css/details-shim.css" media="all"/>
<script src="js/html5.js"></script>
<script src="js/details-shim.js"></script>
<script src="js/alertbox.js"></script>
</head>
<body>
<div id="dialogoverlay"></div>
<div id="dialogbox">
  <div>
    <div id="dialogboxhead"></div>
    <div id="dialogboxbody"></div>
    <div id="dialogboxfoot"></div>
  </div>
</div>
	<div id="header">
	
		<div id="login">
		&nbsp;&nbsp;<p style="font-size: 4px;">&nbsp;</p>
		<div id="sublogin">
			<?php include 'includes/login.html'; ?>
			<?php include 'functions/login.php'; ?>
		</div> <!--#sublogin-->
		</div> <!--#login-->
	
		<div id="logo">
			<img src="img/logo.png" />
		</div> <!--#logo-->
		
		<div id="banner">
			<?php include 'includes/banner.html'; ?>
		</div> <!--#banner-->
		
		<div id="navi">
			<?php include 'includes/navi.html'; ?>
		</div> <!--#navi-->		
		
	</div> <!--#header-->
			           <!-- Start Footer Bottom -->
      <div class="footer-bottom">
            <div class="col-md-12">
              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Developed By Lakshmi priya.D KG BSc CS A </br> </a></p>
            </div>
      </div>
    </footer> 
<div id="contents">
	<div id="mainCont"><br/>
		<?php include 'includes/requirements.php'; ?>		
	</div> <!--#mainCont-->	
</div><!--#contents-->
	<div id="footer">
		<?php include 'includes/footer.php'; ?>
	</div> <!--#footer-->
</body>
</html>
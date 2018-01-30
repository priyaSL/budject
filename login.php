<?php
include("forum.php"); 
?><?php session_start(); include "functions/conn.php";
if(isset($_SESSION['email'])){
	if ($_SESSION['email']){
		header("location:http:users/");
	}
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
	<title>Sign In | Budget Approval System</title>
	<meta name="keywords" content="reservation, janiuay, Budget Approval System, julian, system, thesis, cuenca, iloilo, wvsu, sict">

<link rel="icon" href="users/img/logo.png" type="image/x-png" /> 
<link rel="stylesheet" type="text/css" href="css/layout.css" media="all"/>
<link rel="stylesheet" type="text/css" href="css/nav.css" media="all"/>
<link rel="stylesheet" type="text/css" href="css/about.css" media="all"/>
<link rel="stylesheet" type="text/css" href="css/slideshow.css" media="all"/>
<link rel="stylesheet" type="text/css" href="css/login.css" media="all"/>
<link rel="stylesheet" type="text/css" href="css/alertbox.css"/>
<script src="js/alertbox.js"></script>
<script src="js/modernizr-1.5.min.js"></script>
<script src="js/jquery-1.4.2.min.js"></script>

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
	<div id="main-content"><br/><br/><br />
	<center><h2><u>User Login</u></h2></center>
		<div id="form">
		<form method="POST" action="">
		<?php include "functions/loginMain.php" ?>
			<table>
				<tr>
					<td><label for="email">Email Address : &nbsp;</label></td>
					<td><input autofocus class="textboxlogin" autocomplete="off" type="text" name="email" id="email" /></td>
				</tr>
				<tr>
					<td><label for="pass">Password : </label></td>
					<td><input class="textboxlogin" type="password" name="pass" id="pass" /></td>
				</tr>
				<tr>
					<td colspan="2">
					<br />
						<center><hr /></center>
					<br />
					<center>
					<input type="submit" name="login" id="signin" class="submitlogin" value="Sign In" />
					<input type="reset" name="reset" id="reset" class="submitlogin" value="Clear" />
					</center>
					</td>
				</tr>
				
				<tr>
					<td colspan="2">
					<br />
						<center><hr /></center>
					<br />
					<center>
					<a href="recovery.php"><div class="link">Forgot Password?</div></a>
					<a href="registration.php"><div class="link">Register New User</div></a>
					</center>
					</td>
				</tr>
			</table>
		</form>
		</div>
	</div>
</div><!--#contents-->
	
	<div id="footer">
		<?php include 'includes/footer.php'; ?>
	</div> <!--#footer-->
</body>
</html>

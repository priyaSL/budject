<?php
include("forum.php"); 
?><?php session_start(); include "functions/conn.php";
if(isset($_SESSION['email'])){
	if ($_SESSION['email']){
		header("location:http:users/announcement.php");
	}
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
	<title>Announcement | Budget Approval System</title>
	<meta name="keywords" content="reservation, janiuay, Budget Approval System, julian, system, thesis, cuenca, iloilo, wvsu, sict">

<link rel="icon" href="users/img/logo.png" type="image/x-png" /> 
<link rel="stylesheet" type="text/css" href="css/layout.css" media="all"/>
<link rel="stylesheet" type="text/css" href="css/nav.css" media="all"/>
<link rel="stylesheet" type="text/css" href="css/announcement.css" media="all"/>
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
	<div id="main-content">
			<!-- MySQL data for announcement -->
				<?php
					$queryAnnouncement = mysql_query("SELECT * FROM announcement");
					while($r = mysql_fetch_array($queryAnnouncement)){
						$title = $r['title'];
						$detail = $r['detail'];
						$date = $r['date'];
					}
				?>
	<br /><br />
	<center><h1 class="title">Announcement</h1></center>
		<?php include "includes/announcement/announcement.php" ?>	
	</div>
</div><!--#contents-->
	
	<div id="footer">
		<?php include 'includes/footer.php'; ?>
	</div> <!--#footer-->
</body>
</html>

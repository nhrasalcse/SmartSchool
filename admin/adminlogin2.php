<?php
session_start();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php include("title/title.php");   ?>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
<div id="head" >
<?php include("header/header.php");   ?>

</div>
<div class="sidenav">
  <?php include("menu/menu.php"); ?>
</div>

<div  class="cont">
<center>

<h1> Enter you Username  and password</h1>
<h2>
<h3><p style="color:#F00">your Login information wrong </p></h3>
<form id="form" action="login/admincheck.php" method="post" >
<div id="name" ">User name :</div>
<input  name="name" id="email" type="text"  /><br />
<div id="pass"  >Password :</div>
<input name="pass" id="password" type="password" /><br />
<input type="submit" value="Submit" />
</form></center>

</h2>
<div id="footer">
<?php include("footer/footer.php");   ?>
</div>



</div>
</body>
</html>
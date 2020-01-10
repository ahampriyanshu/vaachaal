<?php  session_start(); ?>
<?php 
    if(!isset($_SESSION['loggedin'])){
    header('location:index.php');}
?>
<?php
include("header.php");
include("panel.php");
include("essentials/database.php");
?>
<!DOCTYPE html>
<html>
<link href="forum.css" rel="stylesheet" type="text/css">
<head>
	<title>Change Password</title>
	<script language="javascript">
		function check()
{
if(document.passform.cpass.value!=document.passform.npass.value)
  {
    alert("Confirm Password does not matched");
	document.passform.cpass.focus();
	return false;
  }	
   return true;
	}
</script>
</head>
<body background="img/back.jpg">
<div class="signinbox" style="position: absolute; top:16%;right:40%;">
	<center><img class="logocircle" src="img/1.png"  title="logo" width="210px" height="200px" border="1" /></center><br>
    <center>
    	<table> 
    		<form action="userbackend.php" name="passform" method="POST" >
    <tr><th>
	<input class="login_text_box"  type="password" name="pass" placeholder="Password" required></th></tr>
	<tr>
		<th>&emsp;</th>
	</tr>
	<tr><th><input class="login_text_box" type="text" name="newmail" placeholder="New E-mail" required></th></tr></table><br>
	<tr><th><button class="submit2" type="submit">Change Password</button></th></tr><br><br><br>
	</form></center>
</div>
</body>
</html>
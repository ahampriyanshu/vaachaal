<?php  session_start(); ?>
<?php
include("header.php");
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
	<center><img class="logocircle" src="img/1.png"  title="logo" width="210px" height="200px" border="1" /></center>
    <center>
    	<table> 
    		<form action="passbackend.php" name="passform" method="POST" onSubmit="return check();">
			<tr><th>
	<input class="login_text_box"  type="text" name="loginid" placeholder="Username" required></th></tr>
    			<tr><th>
	<input class="login_text_box"  type="password" name="pass" placeholder="Current Password" required></th></tr>
	<tr><th><input class="login_text_box" type="password" name="npass" placeholder="New Password" required></th></tr>
	<tr><th><input class="login_text_box" type="password" name="cpass" placeholder="Confirm Password" required></th></tr></table>
	<tr><th><button class="submit" type="submit">Change Password</button></th></tr><br><br>
	</form></center>
</div>
</body>
</html>

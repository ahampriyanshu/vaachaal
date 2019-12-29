<?php
include("header.php");
include("database.php");
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
<body background="back.jpg">
<div class="signinbox" style="position: absolute; top:16%;right:40%;">
	<center><img class="logocircle" src="1.png"  title="logo" width="210px" height="200px" border="1" /></center>
    <center>
    	<table> 
    		<form action="passbackend.php" name="passform" method="POST" onSubmit="return check();">
			<tr><th>
	<input class="login_text_box"  type="text" name="loginid" placeholder="Username"></th></tr>
    			<tr><th>
	<input class="login_text_box"  type="password" name="pass" placeholder="Current Password"></th></tr>
	<tr><th><input class="login_text_box" type="password" name="npass" placeholder="New Password"></th></tr>
	<tr><th><input class="login_text_box" type="password" name="cpass" placeholder="Confirm Password"></th></tr></table>
	<tr><th><input class="submit" type="submit" value="Change Password"></th></tr><br><br>
	</form></center>
</div>
</body>
</html>

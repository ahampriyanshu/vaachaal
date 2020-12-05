<?php
include("essentials/database.php");
?>
<!DOCTYPE html>
<html>
	<link href="forum.css" rel="stylesheet" type="text/css">
	<head>
		<meta charset="UTF-8">
  <meta name="description" content="GNDEC GATE FORUM">
  <meta name="keywords" content="gate,priyanshumay,gne,gndec,">
  <meta name="author" content="PriyanshuMay,priyanshumay">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Retrive Your Password</title>
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
		<style type="text/css">
			html,body{
    padding: 0px;
    height: 85%;
    width: 100%;
    overflow: hidden;
    background-size:     cover;               
    background-repeat:   no-repeat;
    background-position: center;
    }
		</style>
	</head>
	<body background="img/backgne.jpg">
		<div class="signinbox" style="position: absolute; top:12%; right:40%;">
			<center><img class="logocircle" src="img/1.png"  title="logo" width="210px" height="200px" border="1" /></center>
			<center>
			<table>
				<form action="backendforgot.php" name="passform" method="POST" onSubmit="return check();">
					<tr><th>
					<input class="login_text_box"  type="text" name="username" placeholder="Enter Username" required></th></tr>
					<tr><th>
					<input class="login_text_box"  type="text" name="phone" placeholder="Enter mobile number" required></th></tr>
					<tr><th><input class="login_text_box" type="text" name="security" placeholder="Name of your childhood freind" required></th></tr>
					<tr><th><input class="login_text_box" type="password" name="npass" placeholder="New Password" required></th></tr>
					<tr><th><input class="login_text_box" type="password" name="cpass" placeholder="Confirm New Password" required></th></tr></table>
					<tr><th><b><button class="submit2" name="submit" type="submit">Change Password</button></b></th></tr><br><br>
				</form></center>
			</div>
		</body>
	</html>
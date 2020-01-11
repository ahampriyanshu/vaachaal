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
		<title>Delete User</title>
		
	</head>
	<body background="img/back.jpg">
		<div class="signinbox" style="position: absolute; top:16%;right:40%;">
			<center><img class="logocircle" src="img/delete.png"  title="logo" width="210px" height="200px" border="0" /></center><br><br>
			<center>
			<table>
				<form action="backenddelbyuser.php" name="passform" method="POST" >
					<tr><th>
					<input class="login_text_box"  type="password" name="pass" placeholder="Password" required></th></tr>
					<tr>
						<th>&emsp;</th>
					</tr>
					<tr><th><button class="submit2" type="submit">Delete Account</button></th></tr></table><br><br>
				</form></center>
			</div>
		</body>
	</html>
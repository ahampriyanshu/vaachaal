<?php  session_start(); ?>
<?php
if(!isset($_SESSION['admin'])){
header('location:index.php');}
?>
<?php
include("adminpanel.php");
include("essentials/database.php");
?>
<?php  
 $user = $_POST['user'];
 $_SESSION['user'] = $user ;
?>
<!DOCTYPE html>
<html>
	<link href="forum.css" rel="stylesheet" type="text/css">
	<head>
		<title>Admin Verify</title>
		
	</head>
	<body background="img/back.jpg">
	
		<div class="signinbox" style="position: absolute; top:16%;right:40%;">
			<center><img class="logocircle" style="padding-top: 5px;" src="img/admin.png"  title="logo" width="210px" height="200px" border="0" /></center><br><br>
			<center>
			<table>
				<form action="verifyadmin.php" name="passform" method="POST" >
					<tr><th>
					<input class="login_text_box"  type="password" name="superpass" placeholder="Super Password" required></th></tr>
					<tr>
						<th>&emsp;</th>
					</tr>
					<tr><th><button class="submit2" type="submit">Proceed</button></th></tr></table><br><br>
				</form></center>
			</div>
		</body>
	</html>
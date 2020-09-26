<?php  session_start(); ?>
<?php 
    if(!isset($_SESSION["loggedin"])){
    header('location:index.php');}
?>
<?php
include("header.php");

include("essentials/config.php");
?>
<!DOCTYPE html>
<html>
<link href="css/style.css" rel="stylesheet" type="text/css">
<head>
	<meta charset="UTF-8">
  <meta name="description" content="GNDEC GATE FORUM">
  <meta name="keywords" content="gate,ahampriyanshu,gne,gndec,">
  <meta name="author" content="ahampriyanshu,ahampriyanshu">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Change Mobile Number</title>
	
</head>
<body >
<div class="signinbox" style="position: absolute; top:16%;right:40%;">
	<center><img class="logocircle" src="img/1.png"  title="logo" width="210px" height="200px" border="1" /></center><br>
    <center>
    	<table> 
    		<form action="backendmobile.php" name="passform" method="POST" >
    <tr><th>
	<input class="login_text_box"  type="password" name="pass" placeholder="Password" required></th></tr>
	<tr>
		<th>&emsp;</th>
	</tr>
	<tr><th><input class="login_text_box" type="text" name="newmob" placeholder="New Mobile Number" required></th></tr></table><br>
	<tr><th><button class="submit2" type="submit">Change Mobile </button></th></tr><br><br><br>
	</form></center>
</div>
</body>
</html>
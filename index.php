<?php include("header1.php"); ?>
<?php include("essentials/database.php"); ?>
<?php include("about.php"); ?>
<?php // include("essentials/function.php"); ?>
<!DOCTYPE html>
<html>
<head>
<title>LogIn</title>
<link href="forum.css" rel="stylesheet" type="text/css">
</head>
<body background="img/back.jpg">

<?php
extract($_POST);

if(isset($submit))
{
	$rs=mysqli_query($con,"select * from mst_user where login='$loginid' and pass='$pass'");
	if(mysqli_num_rows($rs)<1)
	{
		$found="N";
	}
	else
	{
		$_SESSION['login']=$loginid;
	}
}
if (isset($_SESSION['login']))
{
	exit;
}
?>
<div class="signinbox" style="position: absolute; top:16%;right:5%;">
<table width="100%" border="0">
<table align="center" border="0" WIDTH="50%" height="250">
<form method="post" action="">
<center><img class="logocircle" src="1.png"  title="logo" width="210px" height="200px" border="1" /></center><tr><th>
					<input class="login_text_box"type="TEXT" title="enter your regitered LOGIN ID"  placeholder="LOGIN ID"  maxlength="10" size="25"  id="loginid2" name="loginid"/></td>
				</th>
				<tr>
					<th><input class="login_text_box" type="password"  placeholder="ENTER PASSWORD" name="pass" id="pass2"/></th>
					</tr>
					       <?php
		  if(isset($found))
		  {
		  	echo '<p class="inva" style="font"><center>Invalid Username or Password</center></p>';
		  }
		  ?>
          </span></td>
       				<th class="errors">
					<input class="submit" type="submit" name="submit" id="submit" Value="Login"/>
        <a class="submit2" href="signup.php">New User?</a></th>
      </table>
    </form></td>
  </tr>
</table>
</div>
</body>
</html>

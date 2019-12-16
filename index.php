<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>GATE Forum</title>
<link href="forum.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php
include("header.php");
include("database.php");
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
		$_SESSION[login]=$loginid;
	}
}
if (isset($_SESSION[login]))
{echo '<table width="28%"  border="0" align="center">
		
  <tr>
    <td width="7%" height="65" valign="bottom"></td>
    <td width="93%" valign="bottom" bordercolor="#0000FF"> <a href="showtest.php?subid=1" class="style4" >Start Your Attempt</a></td>
  </tr>
</table>';
   
		exit;
		

}


?>
<table width="100%" border="0">
<table align="center" border="0" WIDTH="50%" height="250">
<h1 class="text-center bg-warning">LOGIN PAGE</h1>
<form method="post" action=""><center>
<img class="img-circle" src="1.jpg"  title="this is my profile pic" width="210px" height="200px" border="1" />
</center><br><tr>
<th class="text-primary">LOGIN ID</th><th>
<input class="form-control"type="TEXT" title="enter your regitered LOGIN ID"  placeholder="LOGIN ID"  maxlength="10" size="25"  id="loginid2" name="loginid"/></tD>
</th><tr>
					<th class="text-primary">ENTER PASSWORD</th>
					<th><input class="form-control" type="password"  placeholder="ENTER PASSWORD" name="pass" id="pass2"/></th>
					</tr>
					       <?php
		  if(isset($found))
		  {
		  	echo "Invalid Username or Password";
		  }
		  ?>
          </span></td>
         <th></th>
				<th class="errors">
					<input class="btn btn-danger "type="submit" name="submit" id="submit" Value="Login"/>
				
        <a class="btn btn-success" href="signup.php">Click here to Register</a></th>
      </table>
      <div align="center">
        </div>
    </form></td>
  </tr>
</table>

</body>
</html>

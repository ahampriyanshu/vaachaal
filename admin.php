<?php include("essentials/database.php"); ?>
<?php include("adminpanel.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
  <meta name="description" content="GNDEC GATE FORUM">
  <meta name="keywords" content="gate,priyanshumay,gne,gndec,">
  <meta name="author" content="PriyanshuMay,priyanshumay">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
.abt { 
    background: #fff;
    border: 1px solid #e2e2e2;
    box-shadow: 0 0 5px #888;
    border-radius: 4px;
    padding-top: 25px;
    width: 850px;
    height: 525px;
    position: absolute;
    bottom: initial;
    margin: auto;
    overflow-y: hidden;
    top: 10%;
}
.heading{
  font-family: 'Courier', sans-serif;
}

.sub{
  font-family: 'Trebuchet MS', sans-serif;
}
</style>
<title>Admin login</title>
<link href="forum.css" rel="stylesheet" type="text/css">
</head>
<body background="img/back.jpg">	
<?php
extract($_POST);

if(isset($submit))
{
  $rs=mysqli_query($con,"select * from admin where login_id ='$username' and password='$password'");
  if(mysqli_num_rows($rs)<1)
  {
    $found="N";
  }
  else
  {
    session_start();
    $_SESSION["admin"] = $username;
    header('location:adminhome.php');
  }
}
?>
    <div class="abt" style="position: absolute; top:12%;left:5%; ">
      <img  id="bulb" src="img/bulb_on.png"   alt="logo"  width="500px"   height="500px;" 
      onmouseover="this.src='img/bulb_on.png';"  onmouseout="this.src='img/bulb_off.png';" style="position:relative; top:-11%; left:21% ;  border="" />
      <img class=' tech_used ' src='img/php.png'  style="position:absolute; left:13% ; bottom:3%; " title="logo" width="75px" height="60px" border="" />
      <img class=" tech_used" src="img/css.png"  style="position:absolute; left:32% ; bottom:3%; " title="logo" width="50px" height="60px" border="" />
      <img class=" tech_used" src="img/mysql.png"  style="position:absolute; left:47% ; bottom:3%; " title="logo" width="60px" height="60px" border="" />
      <img class=" tech_used" src="img/html.png"  style="position:absolute; left:62% ; bottom:3%; " title="logo" width="60px" height="60px" border="" />
      <img class=" tech_used" src="img/js.png"  style="position:absolute; left:77% ; bottom:3%; " title="logo" width="60px" height="60px" border="" />
    </div>
  <div class="signinbox" style="position: absolute; top:16%;right:5%;">
    <table align="center" border="0" WIDTH="80%" height="250">
	 <form method="post" name="login_form" action="" >
	<center><img class="logocircle" src="img/1.png"  title="logo" width="210px" height="200px" border="1" /></center>
	<tr>
	<th><input class="login_text_box" type="TEXT" title="enter your regitered LOGIN ID"  placeholder="LOGIN ID"  maxlength="20" size="25"  id="loginid2" name="username" required/></th>
	</tr>
	<tr> 	
    <th><input class="login_text_box" type="password"  placeholder="ENTER PASSWORD" name="password" id="pass2" required/></th>
	</tr>
	<?php  
		  if(isset($found))
		  {
		  	echo '<p class="inva" style="font"><center>Invalid Username or password</center></p>';
		  }
	?>
	<tr>		  
    <td>&emsp;&emsp;<input class="submit" type="submit" name="submit" id="submit" Value="Admin Login"/>
			&emsp;</form>
    	<button class="submit2" onclick="window.location.href = 'index.php';" >User Login</button>
    </td>
  </tr>  
  <tr>
      <td>&nbsp;&emsp;&emsp;&emsp;&emsp;
      <button class="submit2" onclick="window.location.href = 'signup.php';" >New User?</button>
    </td>
	</tr>
</table>
  </div>
</body>
</html>

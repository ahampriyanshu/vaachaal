<?php include("essentials/database.php"); ?>
<?php include("adminpanel.php"); ?>
<!DOCTYPE html>
<html>
<head>
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
echo "<div class=\"abt\" style=\"position: absolute; top:12%;left:5%;\">
      <img class=\"img-circle\" style=\"position: absolute; top:2%;left:8%;\" src=\"img/IIT_B.png\"  width=\"170px\" height=\"130px\" />
      </center>
      <img class=\"img-circle\" style=\"position: absolute; top:3%;left:40%;\" src=\"img/IITD.png\"  width=\"170px\" height=\"130px\" />
      </center>
      <img class=\"img-circle\" style=\"position: absolute; top:3%;right:8%;\" src=\"img/IITM.png\"  width=\"160px\" height=\"130px\" />
      </center>
      <h1 style=\"position:absolute;top:26%; color:#333; left:9%;font-family:courier;\" class=\"heading\"><center>GRADUATE APTITUDE TEST IN ENGINEERING</center></h1>
      <h style=\"position:absolute;top:38%; left: 3%;right: 3%;\" class=\"sub\">GATE is a computer-based exam conducted at the national level with an aim to examine the understanding of various Engineering and Science UG subjects.GATE exam consists of 65 MCQs and numerical question over a 3 hour duration.GATE 2020 is being conducted by IIT-D in Febuary.GATE score is valid for 3 years and enables students to gain admission to various PG programs such as ME,BE and PhD in IITs,IISc and several other prestigious universities.Top rank holders also get direct interview calls for prestigious government jobs in PSUs</h>
      <img class=\"img-circle\" style=\"position: absolute; bottom:2%;left:5%;\" src=\"img/PSU.png\"  width=\"750px\" height=\"220px\" />
    </div>";
    ?>
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

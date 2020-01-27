<?php   session_start(); ?>
<?php
if(isset($_SESSION['loggedin'])){
header('location:index.php');}
?>
<?php include("essentials/database.php"); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta name="description" content="GNDEC GATE FORUM">
    <meta name="keywords" content="gate,gateforum,gne,gndec,">
    <meta name="author" content="PriyanshuMay,priyanshumay">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    html,body{
    padding: 0px;
    height: 85%;
    width: 100%;
    overflow: hidden;
    background-size:     cover;
    background-repeat:   no-repeat;
    background-position: center;
    }
    #signinbox_index_web {
    background: #fff;
    border-radius: 4px;
    padding-top: 2px;
    width: 380px;
    position: absolute;
    }
    #signinbox_index_mob {
    background: #fff;
    width: 100%;
    height: 100%;
    position: absolute;
    display: none;
    }
    .inva{
    font-family: courier new;
    font-weight: bold;
    color:#333;
    }
    .login_text_index {
    width: 100%;
    font-size: 15px;
    line-height: 1.4;
    padding-left: 8px;
    padding-right: 8px;
    min-height: 32px;
    margin-bottom: 8px;
    border:0.1px solid #e2e2e2;
    box-shadow: 0 0 5px;
    border-radius: 4px;
    }
    .login_text_index {
    width: 100%;
    font-size: 15px;
    line-height: 1.4;
    padding-left: 8px;
    padding-right: 8px;
    min-height: 32px;
    border-radius: 4px;
    }
    .link_index{}
    a{
      color: green;   }
    a:hover {
    color: hotpink;   }
    a:active {
    color: blue;  }
    </style>
    <title>Login</title>
    <link href="forum.css" rel="stylesheet" type="text/css">
  </head>
  <body background="img/backgne.jpg">
    <?php
    extract($_POST);
    if(isset($submit))
    {
    $rs=mysqli_query($con,"select * from userbase where username='$username' and password='$password'");
    if(mysqli_num_rows($rs)<1)
    {
    $found="N";
    }
    else
    {
    $_SESSION["loggedin"] = $username ;
    header('location:index.php');
    }
    }
    echo '';
    ?>
    <div id="signinbox_index_web" style="position: absolute; top:5%;right:36%;">
      <br>
      <center><img class="logocircle" src="img/gnelogo.png"  title="logo" width="200px" height="200px" border="2px"/></center>
      <centre><table align="center" WIDTH="90%" height="400px">
        <form method="post" name="login_form" action="" >
          <tr>
            <td><input class="login_text_index" type="text" title="enter your regitered LOGIN ID"  placeholder="LOGIN ID"  maxlength="20" size="25"   name="username" required />
          </td>
        </tr>
        <tr>
          <td><input class="login_text_index" type="password"  placeholder="ENTER PASSWORD" name="password"  required />
        </td>
      </tr>
      <?php
      if(isset($found))
      {
      echo '<span class="inva" style=""><center>Invalid Username or password</center></span>';
      }
      ?>
      <tr>
        <td>
          &emsp;&emsp;<input class="submit" type="submit" name="submit" Value="Login"/>&emsp;&emsp;</form>
        </td>
      </tr>
      <tr>
        <td><a class="link_index" onclick="window.location.href = 'forgot.php';" >Forgot Password</a>
      </td>
      <td>&nbsp;&emsp;<a  class="link_index" onclick="window.location.href = 'signup.php';">Sign Up</a>
    </td>
  </tr>
</table></centre>
</div>
<div id="signinbox_index_mob" >
<center><img class="logocircle" src="img/1.png"  title="logo" width="240px" height="250px" /></center>
<table align="center" border="0"  width ="75%" height="50%">
  <form method="post" name="login_form" action="">
    <tr>
      <th><input class="login_text_index" type="TEXT" placeholder="LOGIN ID"  maxlength="20" size="25" name="username" required />
    </th>
  </tr>
  <tr>
    <th><input class="login_text_index" type="password"  placeholder="ENTER PASSWORD" name="password" required />
  </th>
</tr>
<?php
if(isset($found))
{
echo '<span class="inva" style=""><center>Invalid Username or password</center></span>';
}
?>
<tr>
  <td>&emsp;<input class="submit" type="submit" name="submit" Value="Login"/>
&emsp;</form>
</td>
</tr>
<tr><td>
<a class="link_index" href="signup.php" >Sign Up ?</a>
</td></tr>
<tr>
<td>&emsp;&emsp;
<a  class="link_index" href="forg.php" >Forgot password</a>
</td>
</tr>
</table>
</div >
<script>
function myFunction(y) {
if (y.matches) {
document.getElementById("abt_visibility").style.display = "none";
document.getElementById("signinbox_index_web").style.display = "none";
document.getElementById("signinbox_index_mob").style.display = "block";
document.body.style.background = "none";
}else{
document.getElementById("signinbox_index_web").style.display = "block";
document.getElementById("signinbox_index_mob").style.display = "none";
document.getElementById("abt_visibility").style.display = "block";
document.body.style.background = "url(img/back.jpg)";
}
}
var y = window.matchMedia("(max-width: 420px)")
myFunction(y)
y.addListener(myFunction)
</script>
</body>
</html>
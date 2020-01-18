<?php   session_start(); ?>
<?php
if(isset($_SESSION['loggedin'])){
header('location:index.php');}
?>
<?php include("header.php"); ?>
<?php include("essentials/database.php"); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta name="description" content="GNDEC GATE FORUM">
    <meta name="keywords" content="gate,priyanshumay,gne,gndec,">
    <meta name="author" content="PriyanshuMay,priyanshumay">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    html,body{
    margin: 0;
    padding: 0;
    }
    body{
    height: 100%;
    width: 100%;
    }
    
    .abt_index {
    background: #fff;
    border: 1px solid #e2e2e2;
    box-shadow: 0 0 5px #888;
    border-radius: 4px;
    padding-top: 25px;
    width: 850px;
    height: 500px;
    position: absolute;
    overflow: hidden;
    top: 9%;
    background-repeat: no-repeat;
    background-size: contain;
    }
    .tech_used:hover{
    transform: scale(1.2);
    }
    #bulb_index:hover{
    transform: scale(1.01);
    }
    #signinbox_index_web {
    background: #fff;
    border: 1px solid #e2e2e2;
    box-shadow: 0 0 5px #888;
    border-radius: 4px;
    padding-top: 2px;
    width: 280px;
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
    border: 1px solid #e2e2e2;
    box-shadow: 0 0 5px #888;
    border-radius: 4px;
    }
    </style>
    <title>Index</title>
    <link href="forum.css" rel="stylesheet" type="text/css">
  </head>
  <body background="img/back.jpg">
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
    <div class="abt_index" id ="abt_visibility" style="position: absolute; top:12%;left:5%; ">
      <img  id="bulb_index" src="img/bulb_on.png"   alt="logo"  width="500px"   height="500px;"
      onmouseover="this.src='img/bulb_on.png';"  onmouseout="this.src='img/bulb_off.png';" style="position:relative; top:-11%; left:21% ;  border="" />
      <img class=' tech_used ' src='img/php.png'  style="position:absolute; left:13% ; bottom:3%;" title="php" width="75px" height="60px" border="" />
      <img class=" tech_used" src="img/css.png"  style="position:absolute; left:32% ; bottom:3%; " title="CSS3" width="50px" height="60px" border="" />
      <img class=" tech_used" src="img/mysql.png"  style="position:absolute; left:47% ; bottom:3%; " title="mysql" width="60px" height="60px" border="" />
      <img class=" tech_used" src="img/html.png"  style="position:absolute; left:62% ; bottom:3%; " title="HTML5" width="60px" height="60px" border="" />
      <img class=" tech_used" src="img/js.png"  style="position:absolute; left:77% ; bottom:3%; " title="JS" width="60px" height="60px" border="" />
    </div>
    <div id="signinbox_index_web" style="position: absolute; top:16%;right:5%;">
      <table align="center" border="0" WIDTH="90%" height="250">
        <form method="post" name="login_form" action="" onSubmit="return check();">
          <center><img class="logocircle" src="img/1.png"  title="logo" width="210px" height="200px" border="" /></center>
          <tr>
            <th><input class="login_text_index" type="text" title="enter your regitered LOGIN ID"  placeholder="LOGIN ID"  maxlength="20" size="25"   name="username" required /></th>
          </tr>
          <tr>
            <th><input class="login_text_index" type="password"  placeholder="ENTER PASSWORD" name="password"  required /></th>
          </tr>
          <?php
          if(isset($found))
          {
          echo '<span class="inva" style=""><center>Invalid Username or password</center></span>';
          }
          ?>
          <tr>
            <td>&emsp;&emsp;<input class="submit" type="submit" name="submit" Value="Login"/>
          &emsp;&emsp;</form>
          <button class="submit2" onclick="window.location.href = 'forgot.php';" >Forgot Password?</button>
        </td>
      </tr>
      <tr>
        <td>&nbsp;&emsp;&emsp;&emsp;&emsp;
          <button  class="submit2" onclick="window.location.href = 'signup.php';" >New User?</button>
        </td>
      </tr>
    </table>
  </div >
  <div id="signinbox_index_mob" >
    <table align="center" border="0"  width ="75%" height="50%">
      <form method="post" name="login_form" action="" onSubmit="return check();">
        <center><img class="logocircle" src="img/1.png"  title="logo" width="210px" height="200px" border="" /></center>
        <tr>
          <th><input class="login_text_index" type="TEXT" title="enter your regitered LOGIN ID"  placeholder="LOGIN ID"  maxlength="20" size="25"   name="username" required /></th>
        </tr>
        <tr>
          <th><input class="login_text_index" type="password"  placeholder="ENTER PASSWORD" name="password"  required /></th>
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
        <button class="submit2" onclick="window.location.href = 'signup.php';" >New User ?</button>
      </td>
    </tr>
    <tr>
      <td>&emsp;&emsp;
        <button  class="submit2" onclick="window.location.href = 'forgot.php';" >Forgot password</button>
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
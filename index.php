<?php
if(isset($_SESSION['loggedin'])){
header('location:home.php');}
?><?php include("header.php"); ?>
<?php include("essentials/database.php"); ?>
<!DOCTYPE html>
<html>
  <head>
    <style>
    @media all and (max-width: 480px)
    {
    .abt {
    display: none;
    }
    }

    .abt {
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
    .sub{
    font-family: 'Trebuchet MS', sans-serif;
    }
    .tech_used:hover{
    transform: scale(1.2);
    }
    #bulb:hover{
    transform: scale(1.01);
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
    session_start();
    $_SESSION["loggedin"] = $username ;
    header('location:home.php');
    }
    }
    echo '';
    ?>
    <div class="abt" id ="abt_visibility" style="position: absolute; top:12%;left:5%; ">
      <img  id="bulb" src="img/bulb_on.png"   alt="logo"  width="500px"   height="500px;"
      onmouseover="this.src='img/bulb_on.png';"  onmouseout="this.src='img/bulb_off.png';" style="position:relative; top:-11%; left:21% ;  border="" />
      <img class=' tech_used ' src='img/php.png'  style="position:absolute; left:13% ; bottom:3%; " title="logo" width="75px" height="60px" border="" />
      <img class=" tech_used" src="img/css.png"  style="position:absolute; left:32% ; bottom:3%; " title="logo" width="50px" height="60px" border="" />
      <img class=" tech_used" src="img/mysql.png"  style="position:absolute; left:47% ; bottom:3%; " title="logo" width="60px" height="60px" border="" />
      <img class=" tech_used" src="img/html.png"  style="position:absolute; left:62% ; bottom:3%; " title="logo" width="60px" height="60px" border="" />
      <img class=" tech_used" src="img/js.png"  style="position:absolute; left:77% ; bottom:3%; " title="logo" width="60px" height="60px" border="" />
      
    </div>
    <div class="signinbox" style="position: absolute; top:16%;right:5%;">
      <table align="center" border="0" WIDTH="90%" height="250">
        <form method="post" name="login_form" action="" onSubmit="return check();">
          <center><img class="logocircle" src="img/1.png"  title="logo" width="210px" height="200px" border="" /></center>
          <tr>
            <th><input class="login_text_box" type="TEXT" title="enter your regitered LOGIN ID"  placeholder="LOGIN ID"  maxlength="20" size="25"   name="username" required /></th>
          </tr>
          <tr>
            <th><input class="login_text_box" type="password"  placeholder="ENTER PASSWORD" name="password"  required /></th>
          </tr>
          <?php
          if(isset($found))
          {
          echo '<span class="inva" style="color:red;"><center>Invalid Username or password</center></span>';
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
</body>
</html>
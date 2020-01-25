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
    height: 100%;
    width: 100%;
    background-image:    url(img/back.jpg);
    background-size:     cover;               
    background-repeat:   no-repeat;
    background-position: center;
    }
    
    
    .tech_used:hover{
    transform: scale(1.2);
    }
    #bulb_index:hover{
    transform: scale(1.01);
    }
    #signinbox_index_web {
    background: #fff;
    padding-top: 2px;
    width: 400px;
    height: 600px;
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
  <body>
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
    header('location: index.php');
    }
    }
    echo '';
    ?>
    
<div id="signinbox_index_web" style="position: absolute; top:16%;right:38%;">
<table align="center" border="0" WIDTH="70%" height="250">
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
          <th><input class="login_text_index" type="password"  placeholder="ENTER PASSWORD" name="password" required /></th>
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




<?php session_start(); ?>
<?php
include("essentials/script.php");
include("header.php");
include("essentials/database.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="description" content="GNDEC GATE FORUM">
        <meta name="keywords" content="gate,priyanshumay,gne,gndec,">
        <meta name="author" content="PriyanshuMay,priyanshumay">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
        <link href="forum.css" rel="stylesheet" type="text/css">
        <style type="text/css">
        body{
        background-color: #f1f1f1 ;
        padding-bottom: 70px;
        padding-left: 75px;
        padding-right:75px;
        }
        .collapsible {
        background-color: white;
        cursor: pointer;
        width: 100%;
        padding: 50px;
        border: none;
        border-radius: 4px;
        text-align: left;
        font-size: 15px;
        }
        .active, .collapsible:hover {
        background-color: #e6ffff;
        font-size: 110%;
        color: red;
        }
        .content {
        padding: 0 18px;
        display: none;
        overflow: auto;
        background-color:;
        }
        #line{
        border: 1px solid red;
        border-radius: 2px;
        }
        #answer_button {
        position:relative;
        left: 40%;
        background-color:#833AB4;
        color: white;
        padding-bottom: 3px;
        padding: 11px;
        font-size: 11px;
        border: none;
        font-weight: bold;
        cursor: pointer;
        font-weight: light;
        font-family:'Trebuchet MS', sans-serif;
        border-radius: 5%;
        }
        #answer_button:hover, #answer_button:focus {
        background-color: #DB4437;
        }
        #title{
        line-height: 1.5;
        color: #333;
        tab-size: 4;
        word-break: break-word;
        text-align: left;
        direction: ltr;
        user-select: text;
        font-size: 25px;
        font-family: Courier new ;
        }
        #anstitle{
        line-height: 1.5;
        color: black;
        tab-size: 4;
        word-break: break-word;
        text-align: left;
        direction: ltr;
        user-select: text;
        font-size: 15px;
        font-family: Courier new ;
        }
        #specs{
        font-size:12px;
        font-family: courier new ;
        font-weight: bold;
        color: #833AB4;
        }
        #details{
        font-weight: bold;
        color: red;
        font-size:12px;
        }
        #answer_box{
        padding:10px;
        padding-bottom: 20px;
        box-shadow: 0 0 5px #888;
        background-color: #d6d6c2;
        width: 97%;
        height: auto;
        border: 2px solid #d6d6c2;
        }
        #answer_box:hover {
        background-color: #e0e0d1;
        }
        #top_button_index {
        font-family:bold;
        display: none;
        align-content: center;
        box-shadow: 0 0 5px gray;
        position: fixed;
        bottom: 20px;
        right: 30px;
        z-index: 99;
        font-size: 25px;
        border: none;
        outline: none;
        background-color:  #4CAF50;
        color: white;
        cursor: pointer;
        padding: 15px;
        font-family:courier new;
        border-radius: 50%;
        }
        #top_button_index:hover {
        background-color:  #833AB4;
        </style>
    </head>
    <body >
        <br><br>
        <?php 
        $sql = "SELECT id,content,level,tym,branch,username,datetym FROM questions ORDER BY datetym DESC";
        $result = $con->query($sql);
        if ($result->num_rows > 0)
        while($row = $result->fetch_assoc()) :?>
            <?php echo '<br>'; ?>
        <button type="button" class="collapsible">
        <span id="title"><?php echo $row["content"]; ?></span><br><hr id="line"><br>
        <span id="specs">Asked by </span>&nbsp;<span id="details"><?php echo $row["username"]; ?></span> &emsp;
        <span id="specs">time alloted is</span> &nbsp;<span id="details"><?php echo $row["tym"]; ?></span> &emsp;
        <span id="specs">difficulty level estimated is</span>&nbsp;&nbsp;<span id="details"><?php echo $row["level"]; ?></span> &emsp;
        <span id="specs">question comes under</span> &nbsp;<span id="details"><?php echo $row["branch"]; ?></span><span id="specs"> branch</span>&emsp;
        <span id="specs">posted on</span> &nbsp;<span id="details"><?php echo $row["datetym"]; ?></span><br>
        <form method="post" action="addans.php"><br>
            <input  type="submit"id="answer_button" value="Have a better answer?"/>
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>"/>
        </form>
        </button>
        <?php
        echo '<div class="content">';
            $queid = $row["id"];
            $ql = "SELECT * FROM answers WHERE id = '$queid' ORDER BY datetym DESC ";
            $resul = $con->query($ql);
            if ($resul->num_rows > 0) {
            while($ro = $resul->fetch_assoc()) {
            echo "<br><div id='answer_box'>
                <span id='anstitle'><br> ". $ro["content"] . "</span><br><span id='specs'> <br>&emsp;&emsp;&emsp;Time required is </span>&nbsp;<span id='details'> " . $ro ["tym"] . "&emsp;&emsp;<span id='specs'> Difficulty Level according to user is </span>&nbsp; ". $ro["level"] ."&emsp;&emsp;<span id='specs'> Answered by </span>&nbsp; " . $ro["username"] . "&emsp;&emsp;<span id='specs'> answered on </span>&nbsp; " . $ro["datetym"] ."</span></div>";
                }
                } else {
                echo "<br><div id='answer_box'><span id='anstitle'>Be the first to answer</span></div>";
                }
            echo '</div>';
            endwhile; ?>
            <button onclick="topFunction()" id="top_button_index" title="Go to top">UP</button>
            <script>
            var coll = document.getElementsByClassName("collapsible");
            var i;
            for (i = 0; i < coll.length; i++) {
            coll[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var content = this.nextElementSibling;
            if (content.style.display === "block") {
            content.style.display = "none";
            } else {
            content.style.display = "block";
            }
            });
            }


            var mybutton = document.getElementById("top_button_index");
            window.onscroll = function() {scrollFunction()};
            function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
            } else {
            mybutton.style.display = "none";
            }
            }
            function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
            }

            </script>
            <br><br>
        </body>
    </html>
   
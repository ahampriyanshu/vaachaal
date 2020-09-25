<?php  session_start(); ?>
<?php
if(!isset($_SESSION['email'])){
header('location:index.php');}
?>
<?php
include("header.php");
include("panel.php");
include("essentials/config.php");
?>
<!DOCTYPE html>
<html>
  <link href="forum.css" rel="stylesheet" type="text/css">
  <head>
    <meta charset="UTF-8">
  <meta name="description" content="GNDEC GATE FORUM">
  <meta name="keywords" content="gate,priyanshumay,gne,gndec,">
  <meta name="author" content="PriyanshuMay,priyanshumay">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
  </head>
  <style type="text/css">
  #info{
  overflow: none;
  padding-left: 5px;
  }
  .setting {
  position: absolute;
  top: 11%;
  left: 55%;
  width: 35%;
  height: 80%;
  border: 2px solid #e2e2e2;
  box-shadow: 0 0 5px #888;
  border-radius: 6px;
  box-sizing: border-box;
  font-family: 'Trebuchet MS', sans-serif;
  background-color:#fff;
  }
  .setting a {
  display: block;
  color: #888;
  font-family: courier;
  padding: 20px;
  font: bold;
  text-align: center;
  text-decoration: none;
  }
  
  .setting a.active {
  background-color: #fff;
  color: black;
  }
  .setting a:hover:not(.active) {
  color: #888;
  }
  #user_info {
  background: #fff;
  border: 1px solid #e2e2e2;
  box-shadow: 0 0 5px #888;
  border-radius: 4px;
  padding-top: 25px;
  width: 360px;
  height:470px;
  position: absolute;
  bottom: initial;
  margin: auto;
  overflow-y: hidden;
  top: 10%;
  }
  #set{
  opacity: 0.7 ;
  }
  #changeopt{
  font-family: courier new;
  }
  #changeopt:hover{
  color: #333;
  font-size: 150%; }
  #setopt{
  font-size: 150%;
  }
  #specs{
  font-size:17px;
  letter-spacing: -1px;
  font-family: courier new ;
  font-weight: bold;
  color: #833AB4;
  }
  #details{
  font-size: 17px;
  font-family: courier new ;
  font-weight: bold;
  color: red;
  }
  #table{
    padding-left:3%;
  text-align: left;
  width: 94%;
  overflow:
  letter-spacing: -1px;
  line-height: 1.5;
  }
  </style>
  <body background="img/back.jpg">
    <div id="user_info" style="position: absolute; top:11%;right:60%;">
      <center><img class="logocircle" src="img/user.png"  title="logo" width="150px" height="145px" border=""/></center><br><br>
      <?php
      $username = $_SESSION["email"];
      $sql = "SELECT user_id,username,password,name,security,phone,email,datetym FROM userbase WHERE username='$username'  ";
      $result = $con->query($sql);
      if ($result->num_rows > 0)
      while($row = $result->fetch_assoc()) :?>
      <div id="info">
        <table id="table" border="0px" cellpadding="6px" cellspacing="0">
          <tr>
            <td><span id="specs">User ID</span></td>
            <td><span id="details"><?php echo $row["user_id"]; ?></span></td>
          </tr>
          <tr>
            <td><span id="specs">Username</span></td>
            <td><span id="details"><?php echo $row["username"]; ?></span></td>
          </tr>
          <tr>
            <td><span id="specs">Full Name</span></td>
            <td><span id="details"><?php echo $row["name"]; ?></span></td>
          </tr>
          <tr>
            <td><span id="specs">Mobile</span></td>
            <td><span id="details"> <?php echo $row["phone"]; ?></span></td>
          </tr>
          <tr>
            <td><span id="specs">E-mail</span></td>
            <td><span id="details"> <?php echo $row["email"]; ?></span></td>
          </tr>
          <tr>
            <td><span id="specs">Joined</span></td>
            <td><span id="details"><?php echo $row["datetym"]; ?></span></td>
          </tr>
        </table>
      </div>
      <?php endwhile; ?>
      <br><br>
    </div>
    <div class="setting" >
      <img class="logocircle" id="set" src="img/setting.png" width="60px" height="60px" border="" style="position: absolute; top:1%; left:23%;" />
      <a id="setopt" class="active"  >Settings</a>
      <a id="changeopt" href="changepassword.php">Change Password</a>
      <a id="changeopt" href="changeusername.php">Change Username</a>
      <a id="changeopt" href="changemobile.php">Change Mobile</a>
      <a id="changeopt" href="changemail.php">Change E-mail</a>
      <a id="changeopt" href="viewque.php">Delete Question</a>
      <a id="changeopt" href="viewans.php">Delete Answer</a>
      <a id="changeopt" style="color: red; font-weight: bold;" href="deletebyuser.php">Delete Account</a>
    </div>
  </body>
</html>
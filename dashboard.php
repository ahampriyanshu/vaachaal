<?php  session_start(); ?>
<?php 
    if(!isset($_SESSION['loggedin'])){
    header('location:index.php');}
?>
<?php
include("header.php");
include("panel.php");
include("essentials/database.php");
?>
<!DOCTYPE html>
<html>
<link href="forum.css" rel="stylesheet" type="text/css">
<head>
  <title>User Details</title>
</head>
<style type="text/css">
  #info{
    padding-left: 20px;
    font: arial;
  }
  .question { 
    background: #fff;
    border: 1px solid #e2e2e2;
    box-shadow: 0 0 5px #888;
    border-radius: 4px;
    padding-top: 25px;
    width: 280px;
    position: absolute;
    bottom: initial;
    margin: auto;
    top: 10%;
}
.answer { 
    background: #fff;
    border: 1px solid #e2e2e2;
    box-shadow: 0 0 5px #888;
    border-radius: 4px;
    padding-top: 25px;
    width: 280px;
    position: absolute;
    bottom: initial;
    margin: auto;
    overflow-y: hidden;
    top: 10%;
}
.setting {
    position: absolute;
    top: 11%;
    left: 55%;
    width: 35%;
    height: 70%;
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
#set{
  opacity: 0.5;
}
#changeopt:hover{
  font-size: 150%;
}
#setopt{
  font-size: 150%;
}
</style>
<body background="img/back.jpg">
<div class="signinbox" style="position: absolute; top:11%;right:60%;">
  <center><img class="logocircle" src="img/user.png"  title="logo" width="150px" height="145px" border="" /></center><br><br>
  <?php
$username = $_SESSION["loggedin"];
$sql = "SELECT user_id,username,password,name,security,phone,email,datetym FROM userbase WHERE username='$username'  ";
$result = $con->query($sql);

if ($result->num_rows > 0) 
        while($row = $result->fetch_assoc()) :?>
      <div id="info">
         <b>User ID:</b>      <?php echo $row["user_id"]; ?> <br><br>
          <b>Username:</b>   <?php echo $row["username"]; ?> <br><br> 
          <b>Full Name:</b>  <?php echo $row["name"]; ?> <br><br>
          <b>Mobile :</b>    <?php echo $row["phone"]; ?><br><br>
          <b>E-mail:</b>     <?php echo $row["email"]; ?><br><br>
          <b>User active since:</b>   <?php echo $row["datetym"]; ?> <br>
      </div>
<?php endwhile; ?>
<br><br>
    </div>

<div class="setting" >
  <img class="logocircle" id="set" src="img/setting.png" width="60px" height="60px" border="" style="position: absolute; top:1%; left:25%;" />
  <a id="setopt" class="active"  >Settings</a>  
  <a id="changeopt" href="changepassword.php">Change Password</a>
  <a id="changeopt" href="changeusername.php">Change Username</a>
   <a id="changeopt" href="changemobile.php">Change Mobile</a>
  <a id="changeopt" href="changemail.php">Change E-mail</a>
   <a id="changeopt" href="viewque.php">Question added</a>
  <a id="changeopt" href="viewans.php">Question answered</a>
</div> 
</body>
</html>

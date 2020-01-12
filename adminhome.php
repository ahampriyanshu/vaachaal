<?php session_start(); ?>
<?php
if(!isset($_SESSION['admin'])){
header('location:index.php');}
?>
<?php
include("adminpanel.php");
include("essentials/database.php");
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Admin Home</title>
    <link href="forum.css" rel="stylesheet" type="text/css">
    <style type="text/css">
    
    body{
    background-position:center;
    background-attachment: fixed;
    background-color: ;
    padding-left: 150px;
    }
    .userinfo {
    padding-left: 40px;
    background: #fff;
    border: 1px solid #e2e2e2;
    box-shadow: 0 0 5px #888;
    border-radius: 4px;
    padding-top: 25px;
    width: 1000px;
    height: 400px;
    top: 7%;
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
    #verify:hover, #verify:focus {
    background-color: #333;
    }
    #verify:hover #set {
    transform: scale(1.2);
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
    #table{
    padding-top: -8 %;
    padding-left:5%;
    text-align: left;
    width: 40%;
    overflow:
    letter-spacing: -1px;
    line-height: 1.5;
    }
    .setting_admin {
    position: relative;
    left: 49%;
    width: 35%;
    height: 40%;
    top: -360px;
    border-radius: 6px;
    box-sizing: border-box;
    font-family: 'Trebuchet MS', sans-serif;
    background-color:#fff;
    }
    .setting_admin a {
    display: block;
    color: #888;
    font-family: courier;
    padding: 20px;
    font: bold;
    text-align: center;
    text-decoration: none;
    }
    
    .setting_admin a.active {
    background-color: #fff;
    color: black;
    }
    .setting_admin a:hover:not(.active) {
    color: #888;
    }
    .admincircle{
    padding-left: 6%;
    border-radius: 30%;
    border: 0;
    }
    #verify {
    background-color:#833AB4;
    color: white;
    padding: 11px;
    font-size: 11px;
    border: none;
    cursor: pointer;
    font-weight: bold;
    font-family:courier new;
    border-radius: 5%;
    }
    
    </style>
  </head>
  <body background="img/back.jpg">
    <?php
    $sql = "SELECT user_id,username,password,name,security,phone,email,datetym FROM userbase";
    $result = $con->query($sql);
    if ($result->num_rows > 0)
    while($row = $result->fetch_assoc()) :?>
    <form method="post" action="verify.php">
      <div class="userinfo">
        <img class="admincircle" src="img/user.png"  title="logo" width="150px" height="145px" style="position: relative;" border=""/>
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
        <div class="setting_admin" >
          <img  id="set" src="img/lock.png" onmouseover="this.src='img/unlock.png';" onmouseout="this.src='img/lock.png';"
          width="300px" height="300px" border="none" style="position: absolute; top:-2%; left:18%;"   />
          <input type="hidden" name="user" value="<?php echo $row['username']; ?>"/>
          <input style="position:relative; top:320px; right:-35%;" type="submit" id="verify" value="Modify User Information" />
        </div>
      </div>
    </form>
    
    <br><br><br><br>
    <?php endwhile; ?>
  </div>
</body>
</html>
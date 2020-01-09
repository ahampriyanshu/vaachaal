<?php session_start(); ?> 
<?php 
       // include("essentials/security.php");
          include("essentials/script.php");
          include("header.php");
          include("essentials/database.php");
          include("panel.php");
?>
<!DOCTYPE html>
<html>
<head>
  <title>Home</title>
  <link href="forum.css" rel="stylesheet" type="text/css">
<style type="text/css">
  
body{
    background-color: ;
    padding-left: 200px;
  }
  .userinfo {
    padding-left: 40px; 
    background: #fff;
    border: 1px solid #e2e2e2;
    box-shadow: 0 0 5px #888;
    border-radius: 4px;
    padding-top: 25px;
    width: 800px;
    height: 180px;
    top: 5%;
}
p {
  font-weight: bold;
}

</style>
</head>
<body >
<?php
$sql = "SELECT user_id,username,password,name,security,phone,email,datetym FROM userbase";
$result = $con->query($sql);

if ($result->num_rows > 0) 
        while($row = $result->fetch_assoc()) :?>
        <div class="userinfo">
            <form method="post" action="useransque.php">
          <b>User ID:</b>      <?php echo $row["user_id"]; ?> &emsp;&emsp;
          <b>Username:</b>     <?php echo $row["username"]; ?> &emsp;&emsp;
          <b>Password:</b>     <?php echo $row["password"]; ?> &emsp;&emsp;
          <b>Full Name:</b>     <?php echo $row["name"]; ?> <br><br>
      <b>Answer to security question:</b>       <?php echo $row["security"]; ?>&emsp;
          <b>Mobile :</b>       <?php echo $row["phone"]; ?><br><br>
          <b>E-mail:</b>       <?php echo $row["email"]; ?>&emsp;&emsp;
          <b>User active since:</b>   <?php echo $row["datetym"]; ?> <br><br>
        <input type="hidden" name="usr" value="<?php echo $row['username']; ?>"/>
                <b><input style="position: right:10%;" type="submit" class="submit2" value="View user ans & quetion" /></b>
            </form>
        </div>
        <br><br>
<?php endwhile; ?>
</div>
              
        </body>
</html>
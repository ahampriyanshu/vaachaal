<?php
session_start();
include("header.php");
include("database.php");

$username = $_POST['loginid'];
        $password = $_POST['pass'];
        $newpassword = $_POST['npass'];
        $confirmnewpassword = $_POST['cpass'];
        $result = mysqli_query($con,"SELECT pass FROM mst_user WHERE 
login='$username'");
        if(!$result)
        {
        echo "The username you entered does not exist";
        }
        else if($newpassword=$confirmnewpassword)
        $sql=mysqli_query($con,"UPDATE mst_user SET pass='$newpassword' where login='$username'");
        if($sql)
        {
        echo '<h1 style="position: absolute; top:16%;right:60%;" >Congratulations You have successfully changed your password</h1>';
        }
       else
        {
       echo '<h1 style="position: absolute; top:16%;right:60%;" >Passwords did not match</h1>';
       }
      ?>

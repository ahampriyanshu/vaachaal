<?php session_start(); ?>
<?php
if(!isset($_SESSION['superadmin'])){
header('location:index.php');}
?>
<?php
include("adminpanel.php");
include("essentials/database.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
  <meta name="description" content="GNDEC GATE FORUM">
  <meta name="keywords" content="gate,priyanshumay,gne,gndec,">
  <meta name="author" content="PriyanshuMay,priyanshumay">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Home</title>
        <link href="forum.css" rel="stylesheet" type="text/css">
        <style type="text/css">
        body{
        background-position:center;
        background-attachment: fixed;
        background-color: ;
        padding-left: 150px;
        }
        #set{
        opacity: 0.7 ;
        }
        #changeopt{
            padding: 30px;
        font-family: courier new;
        }
        #changeopt:hover{

        color: #333;
        font-size: 150%; }
        #setopt{
        font-size: 150%;
        }
        
        .setting_admin {
        position: relative;
        left: 25%;
        width: 35%;
        height: 80%;
        top: 20px;
        padding-top: 20px;
        border: 1px solid #e2e2e2;
        box-shadow: 0 0 5px #888;
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
        padding-left: 8%;
        border-radius: 30%;
        border: 0;
        }
        </style>
    </head>
    <body background="img/back.jpg">
        <div class="setting_admin" >
            <img class="logocircle" id="set" src="img/setting.png" width="60px" height="60px" border="" style="position: absolute; top:6%; left:15%;" />
            <a id="setopt" class="active"  >Settings</a>
            <a id="changeopt" href="admindeleteque.php">Delete Question</a>
            <a id="changeopt" href="admindeleteans.php">Delete Answer</a>
            <a id="changeopt" style="color: red; font-weight: bold;" href="deletebyadmin.php">Delete Account</a>
        </div>
    </div>
    <br><br><br><br>
</div>
</body>
</html>
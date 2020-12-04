<?php session_start(); ?>
<?php 
    if(!isset($_SESSION['admin'])){
    header('location:index.php');}
?> 
<?php 
          include("essentials/config.php");
          include("header.php");
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="description" content="GNDEC GATE FORUM">
  <meta name="keywords" content="gate,ahampriyanshu,gne,gndec,">
  <meta name="author" content="ahampriyanshu,ahampriyanshu">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link href="css/style.css" rel="stylesheet" type="text/css">
<style type="text/css">
  body{
    background-color: ;
    padding-left: 200px;}
    
  .question_box { 
    background: #f1f1f1;
    border: 2px solid #e2e2e2;
    box-shadow: 0 0 5px #888;
    border-radius: 5px;
    width: 70%;
    position: relative;
    bottom: initial;
    margin: auto;
    overflow-y: hidden;
}
#answerbox{
  padding-left: 230px;
}
#submitans {
  padding-left: 300px;
  background-color:#833AB4;
  color: white;
  padding: 11px;
  font-size: 11px;
  border: none;
  cursor: pointer;
  font-weight: light;
        font-family:'Trebuchet MS', sans-serif;
        border-radius: 5%;
}
#submitans:hover, #submitans:focus {
  background-color: #DB4437;
}
</style>
</head>
<body >
  <h><b><centre>Question asked by the user</centre></b></h>
  <br><br>
<?php
$USR = $_POST['usr'];
$sql = "SELECT id,content,category,duration,language,username,created FROM question WHERE username = '$USR'";
$result = $con->query($sql);

if ($result->num_rows > 0) 
        while($row = $result->fetch_assoc()) :?> 
        <div class="question_box" style="padding-left: 30px;">
            <form >
                <br><?php echo $row["content"]; ?> <br><br>
                 Difficulty category estimated is <?php echo $row["category"]; ?>&emsp; 
                  Time alloted is <?php echo $row["duration"]; ?> &emsp;
                 Question comes under <?php echo $row["language"]; ?><br><br>
                 Posted On <?php echo $row["created"]; ?>&emsp;
                <br><br>
            </form>
        </div><br><br>
        <?php 
endwhile;
     ?>
     <centre><h><b>answer given by the user</b></h></centre>
  <br><br>
<?php
$USR = $_POST['usr'];
$q = "SELECT aid,content,category,duration,created FROM answer WHERE username = '$USR'";
$res = $con->query($q);

if ($res->num_rows > 0) 
        while($ro = $res->fetch_assoc()) :?> 
        <div class="question_box" style="padding-left: 30px;">
            <form >
                <br><?php echo $ro["content"]; ?><br><br> 
                 Difficulty category estimated is <?php echo $ro["category"]; ?> &emsp;
                  Time taken  <?php echo $ro["duration"]; ?><br><br>
                 Posted On <?php echo $ro["created"]; ?>&emsp;
                <br><br>
            </form>
        </div><br><br>
        <?php 
endwhile;
     ?>
</div>
</div>
</body>
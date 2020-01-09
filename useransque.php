<?php session_start(); ?> 
<?php 
       // include("essentials/security.php");
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
  <centre><h><b>Question asked by the user</b></h></centre>
  <br><br>
<?php
$USR = $_POST['usr'];
$sql = "SELECT id,content,level,tym,branch,username,datetym FROM questions WHERE username = '$USR'";
$result = $con->query($sql);

if ($result->num_rows > 0) 
        while($row = $result->fetch_assoc()) :?> 
        <div class="question_box" style="padding-left: 30px;">
            <form >
                <br><?php echo $row["content"]; ?> <br><br>
                 Difficulty level estimated is <?php echo $row["level"]; ?>&emsp; 
                  Time alloted is <?php echo $row["tym"]; ?> &emsp;
                 Question comes under <?php echo $row["branch"]; ?><br><br>
                 Posted On <?php echo $row["datetym"]; ?>&emsp;
                <br><br>
            </form>
        </div><br><br>
        <?php 
endwhile;
     ?>
     <centre><h><b>Answers given by the user</b></h></centre>
  <br><br>
<?php
$USR = $_POST['usr'];
$q = "SELECT aid,content,level,tym,datetym FROM answers WHERE username = '$USR'";
$res = $con->query($q);

if ($res->num_rows > 0) 
        while($ro = $res->fetch_assoc()) :?> 
        <div class="question_box" style="padding-left: 30px;">
            <form >
                <br><?php echo $ro["content"]; ?><br><br> 
                 Difficulty level estimated is <?php echo $ro["level"]; ?> &emsp;
                  Time taken  <?php echo $ro["tym"]; ?><br><br>
                 Posted On <?php echo $ro["datetym"]; ?>&emsp;
                <br><br>
            </form>
        </div><br><br>
        <?php 
endwhile;
     ?>
</div>
</div>
</body>
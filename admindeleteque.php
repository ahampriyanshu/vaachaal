<?php  session_start(); ?>
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
  <link href="forum.css" rel="stylesheet" type="text/css">
  <head>
  <meta name="description" content="GNDEC GATE FORUM">
  <meta name="keywords" content="gate,priyanshumay,gne,gndec,">
  <meta name="author" content="PriyanshuMay,priyanshumay">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Question</title>
  </head>
  <style type="text/css">
  .question_box {
  background: #f1f1f1;
  border: 2px solid #e2e2e2;
  box-shadow: 0 0 5px #888;
  border-radius: 5px;
  width: 70%;
  padding: 40px;
  position: relative;
  bottom: initial;
  margin: auto;
  overflow-y: hidden;
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
  #line{
  border: 1px solid red;
  border-radius: 2px;
  }
  #details{
  font-weight: bold;
  color: red;
  font-size:12px;
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
  font-weight: bold;
  font-family:'Trebuchet MS', sans-serif;
  border-radius: 5%;
  }
  #answer_button:hover, #answer_button:focus {
  background-color: #DB4437;
  }
  </style>
  <body background="img/back.jpg">
    <?php
    $USR = $_SESSION['user'];
    $sql = "SELECT * FROM questions WHERE username = '$USR' ORDER BY datetym DESC ";
    $result = $con->query($sql);
    if ($result->num_rows > 0)
    while($row = $result->fetch_assoc()):?>
    <div class="question_box" style="padding-left: 30px;">
      <span id="title"><?php echo $row["content"]; ?></span><br><hr id="line"><br>
      <span id="specs">time alloted is</span> &nbsp;<span id="details"><?php echo $row["tym"]; ?></span> &emsp;
      <span id="specs">difficulty level estimated is</span>&nbsp;&nbsp;<span id="details"><?php echo $row["level"]; ?></span> &emsp;
      <span id="specs">question comes under</span> &nbsp;<span id="details"><?php echo $row["branch"]; ?></span><span id="specs"> branch</span>&emsp;
      <span id="specs">posted on</span> &nbsp;<span id="details"><?php echo $row["datetym"]; ?></span><br>
      <form method="post" action="delquebyadmin.php"><br>
        <input  type="submit"  id="answer_button" value="Delete Question"/>
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>"/>
      </form>
    </div><br><br>
   
    <?php
    endwhile;
    ?>
  </body>
</html>
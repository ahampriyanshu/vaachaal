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
}</style>
</head>
<body >
<?php
$sql = "SELECT title,content,level,tym,branch,username,datetym FROM questions";
$result = $con->query($sql);

if ($result->num_rows > 0) 
        while($row = $result->fetch_assoc())  :?>
        <div class="question_box">
              <br> <div class="question_box">Question Title:<?php echo $row["title"]; ?></div> 
                <br> Question Content:<?php echo $row["content"]; ?> 
                <br> Asked by: <?php echo $row["username"]; ?> 
                <br> Asked by: <?php echo $row["level"]; ?> 
                <br> Asked by: <?php echo $row["tym"]; ?> 
                <br> Email: <?php echo $row["branch"]; ?> 
                <br> Asked by: <?php echo $row["datetym"]; ?><br><br><br>
        </div><br><br>
<?php  endwhile; ?>
</body>
</html>

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
.collapsible {
  background-color: #777;
  color: white;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
}

.active, .collapsible:hover {
  background-color: #555;
}

.content {
  padding: 0 18px;
  display: none;
  overflow: hidden;
  background-color: #f1f1f1;
}
</style>
</head>
<body >
<?php
$sql = "SELECT id,title,content,level,tym,branch,username,datetym FROM questions";
$result = $con->query($sql);

if ($result->num_rows > 0) 
 while($row = $result->fetch_assoc())  :?>
  
<button type="button" class="collapsible">
  <form method="POST" action="addans.php"><br>
   <b><center><?php echo $row["title"]; ?></center></b><br>
                 <?php echo $row["username"]; ?> 
                 <?php echo $row["level"]; ?> 
                 <?php echo $row["tym"]; ?> 
                 <?php echo $row["branch"]; ?> 
                 <?php echo $row["datetym"]; ?><br><br>
                 <?php echo $row["content"]; ?>
<input type="hidden" name="id" value="<?php $row['id']; ?>"/><br><br>
<input type="submit" class="submit2" id="submit2" value="answer" /></form></button>
<div class="content">
  <p>
     <?php
        $qid = $row["id"];
        $answersql = "SELECT * FROM answers WHERE id = '$qid'";
        $answerresult = $con -> query ($answersql) ;

if ($answerresult -> num_rows > 0) 
{
    while($ro = $answerresult->fetch_assoc())
  {
      echo "<div class=\"bg-danger tabcontent\" style=\"border: 5px solid red; padding: 10px; margin-left: 15px;\">";
        echo "<form>";
        echo "<br><b> Answer id:</b> ". $ro["id"] . "<br><b> Answer:</b> ". $ro["content"] . "<br><b> Time required(mins):</b> " . $ro ["tym"] . "<br><b> Difficlty Level:</b> ". $ro["level"] ."<br><b> Answered by:</b> " . $ro["username"] . "<br><b> Email:</b> " . $ro["datetym"] ."<br>" ;
        echo "<br></form></div>";
    }}
else
{
    echo '<div class="bg-danger tabcontent" style="border: 5px solid red; padding: 10px; margin-left: 15px;">Be the first to answer</div>';
}
?></p>
<br>
</div>
<script>
var coll = document.getElementsByClassName("collapsible");
var i;
for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}
</script>
                        
<?php
  endwhile; ?>
</body>
</html>

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
    width: 100%;
    position: relative;
    bottom: initial;
    margin: auto;
    overflow-y: hidden;
}
.collapsible {
  background-color: white;
  color: black;
  cursor: pointer;
  width: 100%;
  border: 1px solid #e2e2e2;
  box-shadow: 0 0 5px #888;
  border-radius: 4px;
  text-align: left;
  outline: ;
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
        while($row = $result->fetch_assoc()) :?>
                <br><br>
        <div class="collapsible" >
            <form method="post" action="addans.php">
              <br>
                <b><center><?php echo $row["title"]; ?></center></b><br>
                 <?php echo $row["username"]; ?> 
                 <?php echo $row["level"]; ?> 
                 <?php echo $row["tym"]; ?> 
                 <?php echo $row["branch"]; ?> 
                 <?php echo $row["datetym"]; ?><br><br>
                 <?php echo $row["content"]; ?>
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>"/><br>
                <button type="submit" class="submit2" >ANSWER</button><br><br>
            </form>
        </div>
        <?php
        $queid = $row["id"];
        $ql = "SELECT * FROM answers WHERE id = '$queid'";
$resul = $con->query($ql);

if ($resul->num_rows > 0) {
    while($ro = $resul->fetch_assoc()) {
        echo "<div  style=\"padding: 10px; \">";
        echo "<form>";
        echo "<br><b> Solution </b> ". $ro["content"] . "<br><b> Time taken by the user </b> " . $ro ["tym"] . "<br><b> Difficlty Level according to user:</b> ". $ro["level"] ."<br><b> Answered by:</b> " . $ro["username"] . "<br><b> answered on :</b> " . $ro["datetym"] ."<br>" ;
        echo "<br></form></div>";
    }
} else {

    echo "<br><br>Be the first to give answer";
}
     
endwhile;
     ?><br><br>
</body>
</html>

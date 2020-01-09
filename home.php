<?php session_start(); ?> 
<?php 
    if(!isset($_SESSION['loggedin'])){
    header('location:index.php');}
?>
<?php 
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
  padding: 40px;
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
#answer_button {
    position:relative;
    left: 70%;
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
#answer_button:hover, #answer_button:focus {
  background-color: #DB4437;
}
</style>
</head>
<body >
    <?php
$sql = "SELECT id,content,level,tym,branch,username,datetym FROM questions";
$result = $con->query($sql);

if ($result->num_rows > 0) 
        while($row = $result->fetch_assoc()) :?>
        <button type="button" class="collapsible">
            <form method="post" action="addans.php">
              <b><input style="position: right:10%;" type="submit"
                id="answer_button" value="Have a better answer?" /></b>
                 <?php echo $row["content"]; ?><br><br>
                asked is by &nbsp;<?php echo $row["username"]; ?> &emsp;
               difficulty level estimated is&nbsp;<?php echo $row["level"]; ?> &emsp;
                 time alloted is &nbsp;<?php echo $row["tym"]; ?> &emsp;
                 question comes under &nbsp;<?php echo $row["branch"]; ?> branch <br>
                 posted on &nbsp;<?php echo $row["datetym"]; ?>&emsp;
                 
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>"/>
                
            </form>
        </button>
        <?php
        $queid = $row["id"];
        $ql = "SELECT * FROM answers WHERE id = '$queid'";
$resul = $con->query($ql);

if ($resul->num_rows > 0) {
    while($ro = $resul->fetch_assoc()) {
        echo "<div class=\"content\" style=\"padding: 10px; \">";
        echo "<form><b> Solution </b> ". $ro["content"] . "<b> Time taken by the user </b> " . $ro ["tym"] . "<b> Difficlty Level according to user:</b> ". $ro["level"] ."<b> Answered by:</b> " . $ro["username"] . "<b> answered on :</b> " . $ro["datetym"] ."" ;
        echo "</form></div>";
    }
} else {
        echo "<div class=\"content\" style=\"padding: 10px; \">";
        echo "Be the first to answer</div>";
} 
endwhile; ?>
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
        </body>
</html>

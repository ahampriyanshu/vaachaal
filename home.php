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
    overflow-y: auto;
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
  font-size: 15px;
}

.active, .collapsible:hover {
  background-color: #888;
  font-size: 110%;
  color: white;
}

.content {
  padding: 0 18px;
  display: none;
  overflow: auto;
  background-color:;
}
#answer_button {
    position:relative;
    left: 70%;
  background-color:#833AB4;
  color: white;
  padding: 11px;
  font-size: 11px;
  border: none;
  font-weight: bold;
  cursor: pointer;
  font-weight: light;
        font-family:'Trebuchet MS', sans-serif;
        border-radius: 5%;
}
#answer_button:hover, #answer_button:focus {
  background-color: #DB4437;
}
#title{
  font-size: 30px;  
  font-family: Courier new ;

}

#line{
  border: 1px solid red;
}
 #specs{
  font-family: Bookman Old Style ;
  font-weight: bold;
  color: red;
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
     <span id="title"><?php echo $row["content"]; ?></span><br><hr id="line"><br>
 <span id="specs">is asked by </span>&nbsp;<?php echo $row["username"]; ?> &emsp;
               difficulty level estimated is&nbsp;<?php echo $row["level"]; ?> &emsp;
                 time alloted is &nbsp;<?php echo $row["tym"]; ?> &emsp;
                 question comes under &nbsp;<?php echo $row["branch"]; ?> branch <br>
                 posted on &nbsp;<?php echo $row["datetym"]; ?>&emsp;
                 
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>"/>
                
            </form>
        </button>

        <?php
        echo '<div class="content">';
        $queid = $row["id"];
        $ql = "SELECT * FROM answers WHERE id = '$queid'";
$resul = $con->query($ql);

if ($resul->num_rows > 0) {
  while($ro = $resul->fetch_assoc()) {
     echo "<div id='ansr'>
    <b><br>  </b> ". $ro["content"] . "<b> <br>Time taken by the user </b> " . $ro ["tym"] . "<b> Difficlty Level according to user:</b> ". $ro["level"] ."<b> Answered by:</b> " . $ro["username"] . "<b> answered on :</b> " . $ro["datetym"] ."</div>";
    }
} else {
        
        echo "<div id='ansr'> Be the first to answer</div>";
} 
echo '<br><br></div>';
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
<br><br><br><br>              
</body>
</html>

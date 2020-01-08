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
</style>
</head>
<body >
<?php
$ID = $_POST['id'];

$sql = "SELECT id,title,content,level,tym,branch,username,datetym FROM questions WHERE id = '$ID'";
$result = $con->query($sql);

if ($result->num_rows > 0) 
        while($row = $result->fetch_assoc()) :?> 
        <div class="question_box">
            <form >
                <br> Question Content:<?php echo $row["content"]; ?> 
                <br> Asked by: <?php echo $row["username"]; ?> 
                <br> Asked by: <?php echo $row["level"]; ?> 
                <br> Asked by: <?php echo $row["tym"]; ?> 
                <br> Email: <?php echo $row["branch"]; ?> 
                <br> Asked by: <?php echo $row["datetym"]; ?>
                <br><br>
            </form>
        </div><br><br>
        <?php 
endwhile;
     ?>
<form name="addform" action="postans.php" method="POST">
<textarea name="content" class="input_text" cols="50" rows="3" placeholder="Enter the solution" required></textarea>
        <div class="form-group">
            <label>Difficulty level</label>
            <select name="level" class="form-control">
              <option value="Low">Low</option>
              <option value="Medium">Medium</option>
              <option value="High">High</option>
            </select>
          </div>
          <div class="form-group">
            <label>Time Required</label>
            <select name="tym" class="form-control">
              <option value="0-2 min">0-2 Min</option>
              <option value="2-5 Min">2-5 Min</option>
              <option value="5-10 Min">5-10 Min</option>min
            </select>
          </div>
<input type="hidden" name="qid" value="<?php echo $ID;?>"><br><?php echo $ID; ?> <br>
<button type="submit" class="submit2">ANSWER</button>
  </form>
</div>
</div>
</body>

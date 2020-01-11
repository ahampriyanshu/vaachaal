<?php session_start(); ?>
<?php
if(!isset($_SESSION['loggedin'])){
header('location:index.php');}
?>
<?php
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
    padding-top: 100px;
    overflow-x: hidden;
    background-color: ;
    padding-left: 130px;
    }
    .question_display {
    position: relative;
    border: none;
    width: 90%;
    padding: 20px;
    }
    #answerbox{
    position: relative;
    padding-left: 230px;
    width: 120%;
    }
    #submitans {
    background-color:#833AB4;
    color: white;
    padding: 11px;
    font-size: 11px;
    border: none;
    cursor: pointer;
    font-weight: bold;
    font-family: courier;
    border-radius: 5%;
    }
    #submitans:hover, #submitans:focus {
    background-color: #DB4437;
    }
    #title{
    line-height: 1.5;
    letter-spacing: -1px;
    color: #333;
    tab-size: 4;
    word-break: break-word;
    text-align: left;
    direction: ltr;
    user-select: text;
    font-size: 25px;
    font-family: Courier new ;
    }
    .select {
    position: relative;
    letter-spacing: 0px;
    font-family: courier;
    color: red;
    }
    .select option{
    font-family: courier;
    color: white;
    font-weight: bold;
    }
    .option{
    font-family: courier;
    color: white;
    font-weight: bold;
    background-color:#833AB4;
    padding: 5px;
    
    }
    #specs{
    
    font-size:12px;
    font-family: courier new ;
    font-weight: bold;
    color: #833AB4;
    }
    #details{
    font-weight: bold;
    color: red;
    font-size:12px;
    }
    #line{
    border: 2px solid red;
    border-radius: 5px;
    }
    </style>
  </head>
  <body>
    <?php
    $ID = $_POST['id'];
    $sql = "SELECT id,content,level,tym,branch,username,datetym FROM questions WHERE id = '$ID'";
    $result = $con->query($sql);
    if ($result->num_rows > 0)
    while($row = $result->fetch_assoc()) :?>
    <div class="question_display" style="left: 30px;">
      <span id="title"><?php echo $row["content"]; ?></span><br><hr id="line"><br>
      <span id="specs">Asked by </span>&nbsp;<span id="details"><?php echo $row["username"]; ?></span> &emsp;
      <span id="specs">time alloted is</span> &nbsp;<span id="details"><?php echo $row["tym"]; ?></span> &emsp;
      <span id="specs">difficulty level estimated is</span>&nbsp;&nbsp;<span id="details"><?php echo $row["level"]; ?></span> &emsp;
      <span id="specs">question comes under</span> &nbsp;<span id="details"><?php echo $row["branch"]; ?></span><span id="specs"> branch</span>&emsp;
      <span id="specs">posted on</span> &nbsp;<span id="details"><?php echo $row["datetym"]; ?></span><br>
    </div><br><br>
    <?php
    endwhile;
    ?>
    <div id="answerbox" >
      <form name="addform" action="postans.php" method="POST">
        <input type="hidden" name="qid" value="<?php echo $ID;?>">
        <textarea name="content" class="input_text" cols="100" rows="7" placeholder="Enter the solution" required></textarea>
        <div class="select">
          <br>
          <label>Difficulty level</label>
          <select name="level" class="option">
            <option value="Low">Low</option>
            <option value="Medium">Medium</option>
            <option value="High">High</option>
          </select>&emsp;&emsp;
          <label>Time Required</label>
          <select name="tym" class="option">
            <option value="0-2 min">0-2 Min</option>
            <option value="2-5 Min">2-5 Min</option>
            <option value="5-10 Min">5-10 Min</option>
          </select>
          &emsp;&emsp;&emsp;&emsp;<button type="submit" id="submitans">Post Your Answer</button>
        </div>
        
        
      </form>
    </div>
  </div>
</div>
</body>
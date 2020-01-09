<?php  session_start(); ?>
<?php 
    if(!isset($_SESSION['loggedin'])){
    header('location:index.php');}
?>
<?php 
	include("header.php");
  include("panel.php");
?>
<!DOCTYPE html>
<html>
<head>
<title>Add Question</title>
<link href="forum.css" rel="stylesheet" type="text/css">
<style>
html, body {
    padding-left: 200px;
}
</style>
</head>
<body>
	<div class="jumbotron">
    <h1>Add New Question </h1>
<form name="addform" action="postque.php" method="POST">
<br>
<textarea name="content" class="input_text" cols="50" rows="3" placeholder="Enter Question" required></textarea>

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
          <div class="form-group">
            <label>Branch</label>
            <select name="branch" class="form-control">
              <option value="CSE/IT">CSE/IT</option>
              <option value="ME">ME</option>
              <option value="EE">EE</option>
              <option value="Civil">Civil</option>
              <option value="ECE">ECE</option>
              <option value="PE">PE</option>
                </select>
          </div>
<input type="submit" value="submit">
</form>
</div>
</body>
</html>

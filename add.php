<?php 
	include("header2.php");
  include("database.php");
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
<form name="addform"action="postque.php" method="POST">
<input type="text" class="input_text" name="name" placeholder="Question Title"><br><br>
<textarea name="quearea" class="input_text" cols="50" rows="3" placeholder="Enter Question"></textarea>

<div class="sever">
            <label for="issueSeverityInput">Severity</label>
            <select id="issueSeverityInput" class="form-control">
              <option value="Low">Low</option>
              <option value="Medium">Medium</option>
              <option value="High">High</option>
            </select>
          </div>
          <div class="form-group">
            <label for="Time required">Time Required</label>
            <select id="Time required" class="form-control">
              <option value="1min">0-1 Min</option>
              <option value="2min">1-2 Min</option>
              <option value="5min">2-5 Min</option>
              <option value="10min">5-10 Min</option>min
            </select>
          </div>
          <div class="form-group">
            <label for="Branch">Branch</label>
            <select id="Branch" class="form-control">
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

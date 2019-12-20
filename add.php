<!DOCTYPE html>
<html>
<head>
<title>Add Question</title>
<link href="forum.css" rel="stylesheet" type="text/css">
</head>
<?php 
	include("header.php");
	?>
<body>


<form action="postque.php" method="POST">
	<input type="text" name="name" placeholder="Your Name"><br>
	<textarea name="quearea" cols="50" rows="3" placeholder="Enter Question"></textarea>
	<input type="button" value="Quearea">
</form>
</body>
</html>
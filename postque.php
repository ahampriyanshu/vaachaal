<?php  session_start(); ?>
<?php
include 'essentials/database.php';

$content = $_POST['content'];
$level = $_POST['level'];
$tym = $_POST['tym'];
$branch = $_POST['branch'];
$username = $_SESSION["loggedin"];
$date = date('m/d/Y h:i:s', time());

$sql = "INSERT INTO questions(content,level,tym,branch,username,datetym) VALUES ('$content','$level','$tym','$branch','$username','$date')";

if ($con->query($sql) === TRUE) 
{
    header('location:home.php');
} 
else 
{
	header('location:add.php');
    echo "<script>alert('SORRY,some error occured!Please try again');</script>";
}	

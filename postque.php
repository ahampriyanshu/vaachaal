<?php  session_start(); ?>
<?php
if(!isset($_SESSION['loggedin'])){
header('location:index.php');}
?>
<?php
include 'essentials/database.php';
date_default_timezone_set('Asia/Kolkata');
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
	header('location:addque.php');
echo "<script>alert('SORRY,some error occured!Please try again');</script>";
}
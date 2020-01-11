<?php  session_start(); ?>
<?php
if(!isset($_SESSION['loggedin'])){
header('location:index.php');}
?>
<?php
include 'essentials/database.php';
date_default_timezone_set('Asia/Kolkata');
$qid = $_POST['qid'];
$content = $_POST['content'];
$username = $_SESSION["loggedin"];
$date = date('m/d/Y h:i:s', time());
$tym = $_POST['tym'];
$level = $_POST['level'];
$sql = "INSERT INTO answers (id,content,username,datetym,tym,level) VALUES ('$qid','$content','$username','$date','$tym','$level')";
if ( $con -> query ($sql) === TRUE)
{
header('location:home.php');
}
else
{
	echo $username;
	}
?>
<?php  session_start(); 
if(!isset($_SESSION["loggedin"])){
header('location: index.php');
}
include 'essentials/config.php';
date_default_timezone_set('Asia/Kolkata');
$qid = $_POST['qid'];
$content = $_POST['content'];
$username = $_SESSION["loggedin"];
$date = date('m/d/Y h:i:s', time());
$duration = $_POST['duration'];
$category = $_POST['category'];
if (empty($content)) {
	echo "<script>
    alert('OOPs,it seems your answer is empty as your life');
    document.location='index.php';
    </script>";
}else{
$sql = "INSERT INTO answer (id,content,username,created,duration,category) VALUES ('$qid','$content','$username','$date','$duration','$category')";
if ( $con -> query ($sql) === TRUE)
{
header('location:index.php');
}
else
{
header('location:index.php');
echo "<script>alert('SORRY,some error occured!Please try again');</script>";
	}
}
?>
<?php  session_start(); ?>
<?php
if(!isset($_SESSION["loggedin"])){
header('location:index.php');}
?>
<?php
include 'essentials/config.php';
date_default_timezone_set('Asia/Kolkata');
$content = $_POST['content'];
$category = $_POST['category'];
$duration = $_POST['duration'];
$language = $_POST['language'];
$username = $_SESSION["loggedin"];
$date = date('m/d/Y h:i:s', time());
if (empty($content)) {
	echo "<script>
    alert('OOPs,it seems your question is empty as your life');
    document.location='index.php';
    </script>";
}else{
$sql = "INSERT INTO question(content,category,duration,language,username,created) VALUES ('$content','$category','$duration','$language','$username','$date')";
if ($con->query($sql) === TRUE)
{
header('location:index.php');
}
else
{
	header('location:addque.php');
echo "<script>alert('SORRY,some error occured!Please try again');</script>";
}
}
?>
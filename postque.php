<?php  session_start(); ?>
<?php
if(!isset($_SESSION['email'])){
header('location:index.php');}
?>
<?php
include 'essentials/config.php';
date_default_timezone_set('Asia/Kolkata');
$content = $_POST['content'];
$level = $_POST['level'];
$tym = $_POST['tym'];
$branch = $_POST['branch'];
$username = $_SESSION["email"];
$date = date('m/d/Y h:i:s', time());
if (empty($content)) {
	echo "<script>
    alert('OOPs,it seems your question is empty as your life');
    document.location='index.php';
    </script>";
}else{
$sql = "INSERT INTO questions(content,level,tym,branch,username,datetym) VALUES ('$content','$level','$tym','$branch','$username','$date')";
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
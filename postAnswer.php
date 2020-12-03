<?php  session_start(); 
if(!isset($_SESSION["loggedin"])){
header('location: index.php');
}
include 'essentials/config.php';
$qid = $_POST['qid'];
$content = $_POST['content'];
$username = $_SESSION["loggedin"];
if (empty($content)) {
	echo "<script>
    alert('Oops,it seems your answer is empty as your life');
    document.location='index.php';
    </script>";
}else{
$sql = "INSERT INTO answer (id,content,username,created) VALUES ('$qid','$content','$username',now())";

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
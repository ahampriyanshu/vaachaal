<?php session_start(); 
if(!isset($_SESSION["loggedin"])){
header('location:index.php');
}
include("essentials/config.php");

$username = $_SESSION["loggedin"];
$password = $_POST['pass'];

$result = mysqli_query($con,"SELECT * FROM user WHERE username = '$username' && password = '$password' ");
$num = mysqli_num_rows($result);

if ($num == 1) {

    $sql=mysqli_query($con,"DELETE FROM user WHERE username='$username'");
   echo "<script>
    alert('We are sorry to see you go');
document.location='logout.php';
</script>";
    
} else {
    echo "<script>
    alert('Incorrect password! Please try again');
    document.location='delAccount.php';
</script>";  
}

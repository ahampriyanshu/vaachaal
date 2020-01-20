<?php session_start(); ?>
<?php 
    if(!isset($_SESSION['loggedin'])){
    header('location:index.php');}
?>
<?php
include("essentials/database.php");

       $username = $_SESSION['loggedin'];
       $password = mysqli_real_escape_string($con,$_POST['pass']);
       $newmob = mysqli_real_escape_string($con,$_POST['newmob']);
        
$sql = "INSERT INTO userbase (username,password) VALUES ('$username','$password') ";
$q = "select * from userbase where username = '$username' && password = '$password' ";

$result = mysqli_query($con,$q);
$num = mysqli_num_rows($result);

if ($num == 1) {

    $sql=mysqli_query($con,"UPDATE userbase SET phone = '$newmob' WHERE username='$username'");
   echo "<script>
    alert('Mobile number successfully changed');
document.location='index.php';
</script>";
    
} else {
    echo "<script>
    alert('Incorrect password! Please try again');
    document.location='changemobile.php';
</script>";  
}
?>
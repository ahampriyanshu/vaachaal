<?php session_start(); ?>
<?php 
    if(!isset($_SESSION['email'])){
    header('location:index.php');}
?>
<?php
include("essentials/config.php");

       $username = $_SESSION['email'];
        $password = $_POST['pass'];
        
        $sql = "INSERT INTO userbase (username,password)
VALUES ('$username','$password')";

$q = "select * from userbase where username = '$username' && password = '$password' ";

$result = mysqli_query($con,$q);
$num = mysqli_num_rows($result);

if ($num == 1) {

    $sql=mysqli_query($con,"DELETE FROM userbase WHERE username='$username'");
   echo "<script>
    alert('We are sorry to see you go');
document.location='signout.php';
</script>";
    
} else {
    echo "<script>
    alert('Incorrect password! Please try again');
    document.location='deletebyuser.php';
</script>";  
}

?>
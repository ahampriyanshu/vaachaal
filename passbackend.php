<?php session_start(); ?>
<?php 
    if(!isset($_SESSION["loggedin"])){
    header('location:index.php');}
?>
<?php
include("essentials/config.php");

       $username = $_SESSION["loggedin"];
        $password = $_POST['pass'];
        $newpassword = $_POST['npass'];
        
        $sql = "INSERT INTO user (username,password)
VALUES ('$username','$password')";

$q = "select * from user where username = '$username' && password = '$password' ";

$result = mysqli_query($con,$q);
$num = mysqli_num_rows($result);

if ($num == 1) {

    $sql=mysqli_query($con,"UPDATE user SET password = '$newpassword' WHERE username='$username'");
   echo "<script>
    alert('Password successfully changed');
document.location='logout.php';
</script>";
    
} else {
    echo "<script>
    alert('Incorrect details! Please try again');
    document.location='changepassword.php';
</script>";  
}

?>
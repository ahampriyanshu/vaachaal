<?php session_start(); ?>
<?php 
    if(!isset($_SESSION["loggedin"])){
    header('location:index.php');}
?>
<?php
include("essentials/config.php");

        $username = $_SESSION["loggedin"];
        $password = $_POST['pass'];
        $newuser = $_POST['newuser'];
        
$sql = "INSERT INTO user (password,username)
VALUES ('$password','$username')";

$q1 = "select * from user where username = '$username' && password = '$password' ";

$result1 = mysqli_query($con,$q1);
$num1 = mysqli_num_rows($result1);

if ($num1 == 1) {
    $q2 = "select * from user where username = '$newuser'";
$result2 = mysqli_query($con,$q2);
$num2 = mysqli_num_rows($result2);
if ($num2 == 1) {
    echo "<script>
    alert('Username already taken');
    document.location='changeusername.php';
</script>";
} 
else {     
 
$sql2=mysqli_query($con,"UPDATE user SET username = '$newuser' WHERE username='$username'");
$sql3=mysqli_query($con,"UPDATE question SET username = '$newuser' WHERE username='$username'");
$sql3=mysqli_query($con,"UPDATE answer SET username = '$newuser' WHERE username='$username'");
   echo "<script>
    alert('Username successfully changed');
   document.location='logout.php';
   </script>";
}
    
} else {
    echo "<script>
    alert('Incorrect Password! Please try again');
    document.location='changeusername.php';
</script>";  
        
    
} 
?>
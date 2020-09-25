<?php session_start(); ?>
<?php 
    if(!isset($_SESSION['superadmin'])){
    header('location:index.php');}
?>
<?php
include("adminpanel.php");
include("essentials/config.php");

       $username = $_SESSION['user'];
        
$sql = "INSERT INTO userbase (username) VALUES ('$username')";

$q = "select * from userbase where username = '$username' ";

$result = mysqli_query($con,$q);
$num = mysqli_num_rows($result);

if ($num == 1) {

    $sql=mysqli_query($con,"DELETE FROM userbase WHERE username='$username'");
   echo "<script>
    alert('User Deleted successfully');
document.location='adminhome.php';
</script>";
    
} else {
    echo "<script>
    alert('Some error occured! Please try again');
    document.location='adminusersetting.php';
</script>";  
}

?>
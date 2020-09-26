<?php session_start(); ?>
<?php 
    if(!isset($_SESSION["loggedin"])){
    header('location:index.php');}
?>
<?php
include("essentials/config.php");

        $username = $_SESSION["loggedin"];
        $aid = $_POST['aid'];
        
        $sql = "INSERT INTO answers (username,aid) VALUES ('$username','$aid')";

$q = "select * from answers where username = '$username' && aid = '$aid' ";

$result = mysqli_query($con,$q);
$num = mysqli_num_rows($result);

if ($num == 1) {

    $sql=mysqli_query($con,"DELETE FROM answers WHERE aid='$aid'");
   echo "<script>
    alert('Answer successfully deleted');
document.location='viewans.php';
</script>";
    
} else {
    echo "<script>
    alert('Some error occured! Please try again');
    document.location='viewans.php';
</script>";  
}

?>
<?php session_start(); ?>
<?php 
    if(!isset($_SESSION['admin'])){
    header('location:index.php');}
?>
<?php
include("essentials/database.php");

        $username = $_SESSION['admin'];
        $superpass = $_POST['superpass'];
        
        $sql = "INSERT INTO admin (login_id,superpassword) VALUES ('$username','$superpass')";

$q = "select * from admin where login_id = '$username' && superpassword = '$superpass' ";

$result = mysqli_query($con,$q);
$num = mysqli_num_rows($result);

if ($num == 1) {

   echo "<script>
document.location='adminusersetting.php';
</script>";
    
} else {
    echo "<script>
    alert('Incorrect Password!Login again');
    document.location='signout.php';
</script>";  
}

?>
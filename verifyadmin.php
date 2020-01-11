<?php session_start(); ?>
<?php 
    if(!isset($_SESSION['admin'])){
    header('location:index.php');}
?>
<?php
include("essentials/database.php");

        $username = $_SESSION['admin'];
        $pass = $_POST['pass'];
        
        $sql = "INSERT INTO admin (login_id,password) VALUES ('$username','$pass')";

$q = "select * from admin where login_id = '$username' && password = '$pass' ";

$result = mysqli_query($con,$q);
$num = mysqli_num_rows($result);

if ($num == 1) {

   echo "<script>
document.location='adminusersetting.php';
</script>";
    
} else {
    echo "<script>
    alert('Incorrect Password!');
    document.location='signout.php';
</script>";  
}

?>
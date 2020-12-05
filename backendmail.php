<?php session_start(); ?>
<?php 
    if(!isset($_SESSION['loggedin'])){
    header('location:index.php');}
?>
<?php
include("essentials/database.php");

       $username = $_SESSION['loggedin'];
        $password = $_POST['pass'];
        $newmail = $_POST['newmail'];
        
        $sql = "INSERT INTO userbase (username,password)
        VALUES ('$username','$password')";

$q="select * from userbase where username = '$username' && password = '$password' ";

$result = mysqli_query($con,$q);
$num = mysqli_num_rows($result);

if ($num == 1) {

    $sql=mysqli_query($con,"UPDATE userbase SET email = '$newmail' WHERE username='$username'");
   echo "<script>
    alert('E-mail successfully changed');
document.location='home.php';
</script>";
    
} else {
    echo "<script>
    alert('Incorrect password! Please try again');
    document.location='changemail.php';
</script>";  
}

?>
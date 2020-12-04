<?php session_start(); 
include("../essentials/config.php");
if (!isset($_SESSION["admin"])) {
    header('location:index.php');
}

$username = $_POST['username'];
if (!$username) {
  echo "<script>
    document.location='index.php';
    </script>";
}

$sql  = "SELECT * from user where username = '$username' ";
$result = mysqli_query($con, $sql);
$num = mysqli_num_rows($result);

if ($num == 1) {

    $sql = mysqli_query($con, "UPDATE user SET status = 3 WHERE username='$username' ");
    echo "<script>
    alert('User successfully deactivated');
document.location='index.php';
</script>";
} else {
    echo "<script>
    alert('Some error occured! Please try again');
    document.location='index.php';
</script>";
}

?>
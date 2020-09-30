<?php include("essentials/config.php"); ?>
<?php

$username = $_POST['username'];
$password = $_POST['password'];
global $username;

$sql = "INSERT INTO userbase (username,password)
VALUES ('$username', '$password')";

$q = "select * from userbase where login = '$username' && pass = '$password'";

$result = mysqli_query($con,$q);

$num = mysqli_num_rows($result);

if ($num == 1) {
	header('location:session.php');
} 
else {
    $found="N";
    global $found;
    echo "<script>
document.location='index.php';
</script>";
}
?>

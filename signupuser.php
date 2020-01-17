<?php
	include("header.php");
include("essentials/database.php"); ?>
<?php
date_default_timezone_set('Asia/Kolkata');
$newuser = $_POST['username'];
$pass = $_POST['pass'];
$name  = $_POST['name'];
$secu  = $_POST['security'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$date = date('m/d/Y h:i:s', time());
$sql = "INSERT INTO userbase (username,password,name,security,phone,email,datetym) VALUES
('$newuser','$pass','$name','$secu','$phone','$email','$date')";
$q = "select * from userbase where username = '$newuser'";
$result = mysqli_query($con,$q);
$num = mysqli_num_rows($result);
if ($num == 1) {
echo "<script>
alert('Username already taken');
document.location='signup.php';
</script>";
}
else {
$qy = "INSERT INTO userbase(username,password,name,security,phone,email,datetym) VALUES ('$a$newuser','$pass','$name','$secu','$phone','$email','$date')";
mysqli_query($con,$qy);
echo "<script>
alert('Login ID successfully created');
document.location='login.php';
</script>";

}
?>
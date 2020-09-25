<?php
 
 if(isset($_POST["reset_password"])){

 $selector = bin2hex(random_bytes(8));
 $token    = random_bytes(32);

 $url = "https://lab.gdy.club/~priyanshumay/GATE/createnewpassword.php?selector=".$selector. "&validator=".bin2hex($token);

 $expires = date("U") + 1800;
 
 include("essentials/config.php");

 $userEmail = $_POST["email"];
 $sql = "DELETE FROM pwdReset WHERE pwdResetEmail=?";
 $stmt = mysqli_stmt_init($con);
 if (!mysqli_stmt_prepare($stmt,$sql)) {
 echo 'OOPs something went wrong';
 exit();
 }else{
 	mysqli_stmt_bind_param($stmt,"s",$userEmail);
  mysqli_stmt_execute($stmt);
 }
 $sql = "INSERT INTO pwdReset (pwdResetEmail,pwdResetSelector,pwdResetToken,pwdResetExpires) VALUES (?, ?, ?, ?)";
 $stmt = mysqli_stmt_init($con);
 if (!mysqli_stmt_prepare($stmt,$sql)) {
 echo 'OOPs something went wrong';
 exit();
 }else{

 	$hashedToken = password_hash($token, PASSWORD_DEFAULT);
 	mysqli_stmt_bind_param($stmt,"s",$userEmail,$selector,$hashedToken,$expires);
  mysqli_stmt_execute($stmt);

}
mysqli_stmt_close($stmt);


mysqli_stmt_close($con);

$to = $userEmail;
$subject = 'Reset your password';
$message = '<p>We recieved a password request.The link to reset your password </p>';
$message .= '<p>Here is your password rest link:<br>';
$message .= '<a href="'.$url.'">'.$url.'</a></p>';

$headers = "From: GNE <tiwarimay2002@gmail.com>\r\n";
$headers .= "Reply-To: tiwarimay2002@gmail.com\r\n";
$headers .= "Content-type: text/html\r\n";


mail($to,$subject,$message,$headers);

header("Location: resetpassword.php?reset=success")

 }

 }else {
 	header("Location: login.php");
 }

?>
<?php
session_start();
require_once('essentials/config.php');
include "loadClass.php";
if (isset($_SESSION['email'])) : {
    header("location: index.php");
  }
endif;
$validation = new validation;
$queries    = new queries;
$sendEmail  = new sendEmail;

if (isset($_POST['submit'])) {

  $validation->validate('email', 'Email', 'required|min_len|6');

  if ($validation->run()) {

    $email    = $validation->input('email');
    $fullName = "User";
    $code     = rand();
    $code     = password_hash($code, PASSWORD_DEFAULT);
    $url      = "https://" . $_SERVER['SERVER_NAME'] . "/vaachaal/resetPassword.php?code=" . $code;
    $url2     = "https://ahampriyanshu.github.com";
    $status   = 0;
    $subject  = 'Please verify it is you';
    $body = '<p style="color:#66FCF1; font-size: 32px;" > Hi ' . $fullName . '</p><p  style="color:grey; font-size: 16px;" > You are almost done.Click below to set a new password</p> 
    <p><a style="background-color: #66FCF1;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    -webkit-transition-duration: 0.4s;
    transition-duration: 0.4s;"
    href="' . $url . '">Change Password</a></p>
    <p>Or copy this link :'.$url.'</p>
    <p  style="color:red; font-size: 10px;" > Need Help ? <a  href="' . $url2 . '">Contact Us</a></p>';

    $result = mysqli_query($con, "UPDATE user SET code='$code' WHERE email = '$email' AND status<=1 ");

    if ($result) {
      if  ($sendEmail->send($fullName, $email, $subject, $body))
{        $_SESSION['accountCreated'] = " Please check your inbox to set new password";
        header("location: login.php");}
    } else {
      $_SESSION['notActive'] = "Account doesn't exist";
      header("location: login.php");
    }
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Forgot Password</title>
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/login.css">

</head>

<body>
  <main>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6 login-section-wrapper">
          <div class="login-wrapper my-auto">
            <h1 class="login-title">Hi there</h1>
            <form name="signupform" method="post">
              <div class="form-group mb-6">
                <label for="email">Enter Your Registered Email</label>
                <input type="email" name="email" class="form-control" placeholder="example@dummy.com" required />
                <div class="error text-center text-danger">
                  <?php if (!empty($validation->errors['email'])) : echo $validation->errors['email'];
                  endif; ?>
                </div>
              </div>

              <input name="submit" id="login" class="btn btn-block login-btn" type="submit" value="Change Password">
            </form>
            <p class="login-wrapper-footer-text">Already a user&emsp;<a href="login.php" class="text-reset">Welcome Back</a></p>
          </div>
        </div>
      </div>
    </div>
  </main>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>
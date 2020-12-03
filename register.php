<?php
session_start();
require_once('essentials/config.php');
include "loadClass.php";
if (isset($_SESSION["loggedin"])) :
  header("location: index.php");
endif;
$validation = new validation;
$queries    = new queries;
$sendEmail  = new sendEmail;

if (isset($_POST['submit'])) {

  $validation->validate('name', 'Full Name', 'required');
  $validation->validate('username', 'Username', 'uniqueEmail|user|required');
  $validation->validate('email', 'Email', 'uniqueEmail|user|required');
  $validation->validate('password', 'Password', 'required|min_len|6');
  $validation->validate('phone', 'Phone', 'uniqueEmail|user|required');

  if ($validation->run()) {

    $name = $validation->input('name');
    $username = $validation->input('username');
    $email    = $validation->input('email');
    $password = $validation->input('password');
    $phone    = $validation->input('phone');
    $password = password_hash($password, PASSWORD_DEFAULT);
    $code     = rand();
    $code     = password_hash($code, PASSWORD_DEFAULT);
    $url      = "http://" . $_SERVER['SERVER_NAME'] . "/vaachal/verifyEmail.php?confirmation=" . $code;
    $url2     = "http://" . $_SERVER['SERVER_NAME'] . "/vaachal/contact.php";
    $status   = 0;
    $date = date('m/d/Y h:i:s', time());
    $subject  = 'Please confirm your Email';
    $body = '<p style="color:#66FCF1; font-size: 32px;" > Hi ' . $name . '</p><p  style="color:grey; font-size: 16px;" > You are almost done.Click below to verify your email address</p> 
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
    href="' . $url . '">Verify Email</a></p><p  style="color:red; font-size: 10px;" > Need Help ? <a  href="' . $url2 . '">Contact Us</a></p>';

    $run = mysqli_query($con, "INSERT INTO user (username,password,name,phone,email,code,status,created,last_login) VALUES
    ('$username','$password','$name', '$phone','$email', '$code', '$status', 'now()','now()')");

    if ($run) {
      $sendEmail->send($name, $email, $subject, $body);
        $_SESSION['accountCreated'] = "Your account has been created successfully. Please verify your email";
        header("location: login.php");
    
    } else {
        echo "Error description: " . mysqli_error($con) ;
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
  <title>Register</title>
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/login.css">

</head>

<body>
  <main>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12 login-section-wrapper">
          <div class="brand-wrapper">
          <a href="index.php"><img src="img/logo.png" alt="logo" class="logo"></a>
          </div>
          <div class="login-wrapper my-auto">
            <form name="signupform" method="post">

              <div class="form-group">
                <label for="password">Name</label>
                <input type="text" name="name" class="form-control" placeholder="Enter your name" required />
                <div class="error text-center text-danger">
                  <?php if (!empty($validation->errors['name'])) : echo $validation->errors['name'];
                  endif; ?>
                </div>
              </div>

              <div class="form-group">
                <label for="password">Username</label>
                <input type="text" name="username" class="form-control" placeholder="Enter your username" required />
                <div class="error text-center text-danger">
                  <?php if (!empty($validation->errors['username'])) : echo $validation->errors['username'];
                  endif; ?>
                </div>
              </div>

              <div class="form-group mb-6">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" placeholder="Enter your email" required />
                <div class="error text-center text-danger">
                  <?php if (!empty($validation->errors['email'])) : echo $validation->errors['email'];
                  endif; ?>
                </div>
              </div>
              <div class="form-group mb-6">
                <label for="password">Phone</label>
                <input type="number" name="phone" class="form-control" placeholder="+91">
                <div class="error text-center text-danger">
                  <?php if (!empty($validation->errors['phone'])) : echo $validation->errors['phone'];
                  endif; ?>
                </div>
                <div class="error text-center text-danger">
                  <?php if (!empty($validation->errors['password'])) : echo $validation->errors['password'];
                  endif; ?>
                </div>
              </div>
              <div class="form-group mb-6">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Create new passsword" name="pass" required />
                <div class="error text-center text-danger">
                  <?php if (!empty($validation->errors['password'])) : echo $validation->errors['password'];
                  endif; ?>
                </div>
              </div>
              <input name="submit" id="login" class="btn btn-block login-btn" type="submit" value="Register">
            </form>
            <a href="login.php" class="text-reset">Registered Already ?</a>
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
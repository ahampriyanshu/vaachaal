<?php
session_start();
require_once('../essentials/config.php');
if (isset($_SESSION["loggedin"])) : {
    header("location: index.php");
  }
endif;
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login</title>
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/login.css">
</head>

<body>
  <main>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12 login-section-wrapper">
          <div class="brand-wrapper">
          <img src="../img/logo.png" alt="logo" class="logo">
          </div>

          <?php
          extract($_POST);

          if (isset($submit)) {
            $rs = mysqli_query($con, "select * from admin where login_id ='$username' and password='$password'");
            if (mysqli_num_rows($rs) < 1) {
              $found = "N";
            } else {
              session_start();
              $_SESSION["admin"] = $username;
              header('location:index.php');
            }
          }
          ?>

          <div class="login-wrapper my-auto">
            <form name="login_form" method="post" action="">
              <div class="form-group">
                <label for="password">username</label>
                <input type="text" name="username" id="username" class="form-control" placeholder="Enter registered username" required />

              </div>
              <div class="form-group mb-4">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Enter your passsword" required />

              </div>
              <?php
              if (isset($found)) {
                echo '<p class="text-danger text-center">Invalid username or password</p>';
              }
              ?>
              <input name="submit" id="login" class="btn btn-block login-btn" type="submit" value="Login">
            </form>
          </div>
        </div>
      </div>
    </div>
  </main>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
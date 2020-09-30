<?php
session_start();
require_once('essentials/config.php');
include "dbConfig.php";
if (isset($_SESSION['email'])) : {
  header("location: index.php");
}
endif;
if(isset($_GET['code']) && $_GET['code'] != '0'){
$code = $_GET['code'];

$verify = mysqli_query($connect, "SELECT * FROM customer WHERE code='$code' and status <= 1");
if (mysqli_num_rows($verify) < 1) {
    header('location: login.php');
}
}
else
{
    header('location: register.php');
}

$validation = new validation;
$queries    = new queries;

if (isset($_POST['submit'])) {
  $validation->validate('newpass', 'New Password', 'required|min_len|6');
  $validation->validate('cnfrmpass', 'Confirm Password', 'required|min_len|6');
  if ($validation->run()) {

    $newpass = $validation->input('newpass');
    $cnfrmpass = $validation->input('cnfrmpass');

        if ($newpass == $cnfrmpass) {
            $newpass = password_hash($newpass, PASSWORD_DEFAULT);
            $update = mysqli_query($connect, "UPDATE customer SET password = '$newpass' WHERE code='$code' ");
            if ($update){
            $deleteCode = mysqli_query($connect, "UPDATE customer SET code = 0 WHERE code='$code' ");
            header("location:login.php");
            }
            else
            {
              header('location: error.php');
            }
          }
        }
        else{
          echo 'New Password and Confirm Password does not match';
        }
  }
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
  <link rel="stylesheet" href="css/login.css">
</head>
<body>
  <main>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6 login-section-wrapper">

          <?php if (isset($_SESSION['unmatched'])) : ?>
            <div class="alert alert-danger">
              <?php echo $_SESSION['unmatched']; ?>
            </div>
          <?php endif; ?>
          <?php unset($_SESSION['unmatched']); ?>

          <div class="login-wrapper my-auto">
            <h1 class="login-title">Set New Password</h1>
            <form method="post" action="">
              <div class="form-group mb-4">
                <label for="newpass">New Password</label>
                <input type="password" name="newpass" id="newpass" class="form-control" placeholder="********" required />
                <div class="error text-danger text-center">
                  <?php if (!empty($validation->errors['newpass'])) : echo $validation->errors['newpass'];
                  endif; ?>
                </div>
              </div>
              <div class="form-group mb-4">
                <label for="cnfrmpass">Confirm Password</label>
                <input type="password" name="cnfrmpass" id="cnfrmpass" class="form-control" placeholder="********" required />
                <div class="error text-danger text-center">
                  <?php if (!empty($validation->errors['cnfrmpass'])) : echo $validation->errors['cnfrmpass'];
                  endif; ?>
                </div>
              </div>
              <input name="submit" id="login" class="btn btn-block login-btn" type="submit" value="Proceed">
            </form>
          </div>
        </div>
      </div>
    </div>
  </main>
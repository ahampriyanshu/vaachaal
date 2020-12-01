<?php include("header.php");
if (!isset($_SESSION["loggedin"])) {
  header('location: index.php');
}
?>
<!-- <a href="changepassword.php">Change Password</a>
        <a href="changeusername.php">Change Username</a>
        <a href="changemobile.php">Change Mobile</a>
        <a href="changemail.php">Change E-mail</a>
        <a href="viewque.php">Delete Question</a>
        <a href="viewans.php">Delete Answer</a>
        <a style="color: red; font-weight: bold;" href="">Delete Account</a> -->

<div class="container">
  <div class="row">
    <div class="col-lg-9 mx-auto my-4 text-center">
      <h2><span class="badge badge-dark">Manage Account</span></h2>
    </div>
    <div class="col-lg-9 mx-auto text-center">
      <a href="addProduct.php" class="m-2 btn btn-sm btn-success">
        <i class="fa fa-plus-square mr-2"></i> <b>Add New Question</b></a>

      <a href="viewque.php" class="m-2 btn btn-sm btn-danger">
        <i class="fa fa-box-open mr-2"></i> <b>Delete Question</b></a>

      <a href="viewans.php" class="m-2 btn btn-sm btn-danger">
        <i class="fa fa-box-open mr-2"></i> <b>Delete Answer</b></a>

      <a href="changeusername.php" class="m-2 btn btn-sm btn-warning">
        <i class="fa fa-ban mr-2"></i> <b>Change Username</b></a>

      <a href="deletebyuser.php" class="m-2 btn btn-sm btn-info">
        <i class="fas fa-bell mr-2"></i> <b>Deactivate Account</b></a>
    </div>
    <div class="col-lg-6 mx-auto mt-5">
      <div class="table-responsive mx-auto">
        <table class='table table-borderless'>
          <tbody>
            <?php
            $username = $_SESSION["loggedin"];
            $sql = "SELECT user_id,username,password,name,phone,email,code,status,created,last_login FROM user WHERE username='$username'  ";
            $result = $con->query($sql);
            if ($result->num_rows > 0)
              while ($row = $result->fetch_assoc()) : ?>
              <tr>
                <td><span class="badge badge-light">User ID</span></td>
                <td><span class="badge badge-light"><?php echo $row["user_id"]; ?></span></td>
              </tr>
              <tr>
                <td><span class="badge badge-light">Username</span></td>
                <td><span class="badge badge-light"><?php echo $row["username"]; ?></span></td>
              </tr>
              <tr>
                <td><span class="badge badge-light">Full Name</span></td>
                <td><span class="badge badge-light"><?php echo $row["name"]; ?></span></td>
              </tr>
              <tr>
                <td><span class="badge badge-light">Mobile</span></td>
                <td><span class="badge badge-light"> <?php echo $row["phone"]; ?></span></td>
              </tr>
              <tr>
                <td><span class="badge badge-light">E-mail</span></td>
                <td><span class="badge badge-light"> <?php echo $row["email"]; ?></span></td>
              </tr>
              <tr>
                <td><span class="badge badge-light">Joined</span></td>
                <td><span class="badge badge-light"><?php echo $row["created"]; ?></span></td>
              </tr>
            <?php endwhile; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
</div>
</body>
<script src="https://kit.fontawesome.com/77f6dfd46f.js" crossorigin="anonymous"></script>
<!-- <script src="js/jquery.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script> -->
</html>
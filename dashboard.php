<?php include("header.php");
if (!isset($_SESSION["loggedin"])) {
  header('location: index.php');
}
?>

<div class="container">
  <div class="row">
    <div class="col-lg-9 mx-auto my-4 text-center">
      <h2><span class="badge badge-dark">Manage Account</span></h2>
    </div>
    <div class="mx-auto text-center">
      <a href="addQuestion.php" class="m-2 btn btn-sm btn-success">
        <i class="fa fa-plus-square mr-2"></i> <b>Add New Question</b></a>

      <a href="delQuestion.php" class="m-2 btn btn-sm btn-warning">
        <i class="far fa-trash-alt mr-2"></i><b>Delete Question</b></a>

      <a href="delAnswer.php" class="m-2 btn btn-sm btn-warning">
        <i class="far fa-trash-alt mr-2"></i><b>Delete Answer</b></a>


      <a href="delAccount.php" class="m-2 btn btn-sm btn-danger">
        <i class="far fa-trash-alt mr-2"></i> <b>Deactivate Account</b></a>
    </div>
    <div class="col-lg-6 mx-auto mt-5 text-center">
      <div style="font-size: larger;" class="table-responsive mx-auto">
        <table class="table table-borderless">
          <tbody>
            <?php
            $username = $_SESSION["loggedin"];
            $sql = "SELECT uid,username,password,name,phone,email,code,status,created,last_login FROM user WHERE username='$username'  ";
            $result = $con->query($sql);
            if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) : ?>
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
                  <td><span class="badge badge-light">Created</span></td>
                  <td><span class="badge badge-light"><?php echo $row["created"]; ?></span></td>
                </tr>
                <tr>
                  <td><span class="badge badge-light">Last login</span></td>
                  <td><span class="badge badge-light"><?php echo $row["last_login"]; ?></span></td>
                </tr>
            <?php endwhile;
            } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<?php include("footer.php"); ?>
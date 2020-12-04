<?php include("header.php");
include "loadClass.php";
if (!isset($_SESSION["loggedin"])) {
	header('location: index.php');
}
?>

<?php
$queries    = new queries;


if (isset($_POST['submit'])) {
  
	  $password = $_POST['password'];
	  echo $password;

	  if ($queries->query("SELECT * FROM user WHERE username = ? ", [$username])) {
		if ($queries->count() > 0) {
		  $row = $queries->fetch();
		  $dbPassword = $row->password;
			if (password_verify($password, $dbPassword)) {
			  $update = mysqli_query($con, "DELETE FROM user WHERE username='$username'");
			  echo "<script>
    alert('We are sorry to see you go');
document.location='logout.php';
</script>";
			} else {
				echo "<script>
				alert('Incorrect Password');
			document.location='logout.php';
			</script>";
			}
		  }
		} else {
			echo "<script>
			alert('Suspicios activity');
		document.location='logout.php';
		</script>";
		}
	  }

  ?>

<div class="d-flex align-items-center justify-content-center">
        <div style="height:100vh; padding-top:10vh;">
			
		<img class="logocircle" src="img/delete.png" title="logo" width="210px" height="200px" alt="trash" />
	<form  action="" name="passform" method="POST">

		<div class="form-group mt-2">
		
			<input type="password" class="form-control" name="password" placeholder="Password">
		</div>
		<button type="submit" name="submit" class="btn btn-danger">Delete Account</button>
	</form>

		</div>
	  </div>
<?php include("footer.php"); ?>
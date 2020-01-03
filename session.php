<?php include("header1.php"); ?>
<?php include("essentials/database.php"); ?>
<?php include("about.php"); ?>
<?php // include("essentials/function.php"); ?>
<?php
extract($_POST);

if(isset($submit))
{
	$rs=mysqli_query($con,"select * from mst_user where login='$username' and pass='$password'");
	if(mysqli_num_rows($rs)<1)
	{
		$found="N";
	}
	else
	{
		$_SESSION['login']=$username;
	}
}

if (isset($_SESSION['login']))
{
	echo "<script>location.href='add.php'</script>";
	exit;
}
?>

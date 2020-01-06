<?php session_start(); ?>
<?php include("essentials/database.php"); ?>
<?php // include("essentials/function.php"); ?>
<?php
		$_SESSION['user']=$username;
		header('location:add.php');

?>

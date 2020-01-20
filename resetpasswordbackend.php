<?php

if (isset($_POST["reset-password-submit"])) {

	$selector = $POST["selector"];
	$validator = $POST["validator"];
	$password = $POST["pwd"];
	$passwordRepeat = $POST["pwd-repeat"]; 

	 if(empty($password) || empty($passwordRepeat)){
	 	header("Location: resetpassword.php");
	 	exit();
	 }

	 $






	
}else{
	header("Location: index.php")
}






?>
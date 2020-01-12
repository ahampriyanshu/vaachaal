<?php  	

$host="localhost"; // Host name 
$user="root";  // Mysql user 

$con=mysqli_connect("$host","$user","") or die('Database not connected'); //connecting database

$db = mysqli_select_db($con,"forum");
if (empty($db)) 
{
	$dbcr = 'create database forum';
	$check = mysqli_query($con,$dbcr);



if (!$check) {

      echo "database couldn't be created ";
  }	
  }


  $table1 = " select * from userbase";
  $check1 = mysqli_query($con,$table1);

  if (!$check1) {

  	$create1 = "CREATE TABLE userbase (
    user_id int(50) NOT NULL AUTO_INCREMENT,
    username varchar(50) NOT NULL,
    password varchar(50) NOT NULL,
    name     varchar(50) NOT NULL,
    security varchar(50) NOT NULL,
    phone    bigint(50) NOT NULL,
    email    varchar(50) NOT NULL,
    datetym  varchar(50) NOT NULL,
    PRIMARY KEY(user_id) )";      
    
    $ok1 = mysqli_query($con,$create1);
  	if (!$ok1) {
  		echo ' ';
  	}else
    { echo 'table created successfully';  }
  }
$table2 = " select * from questions";
  $check2 = mysqli_query($con,$table2);
  
  if (!$check2) {

    $create2 = "CREATE TABLE questions (
    id   int(50) NOT NULL AUTO_INCREMENT,
    content   text(10000) NOT NULL,
    level     varchar(50) NOT NULL,
    tym       varchar(50) NOT NULL,
    branch    varchar(50) NOT NULL,
    username  varchar(50) NOT NULL,
    datetym   varchar(50) NOT NULL ,
    PRIMARY KEY(id))";
    $ok2 = mysqli_query($con,$create2);
    if (!$ok2) {
      echo ' ';
    }else
    { echo 'table created successfully';  }
  }

$table3 = " select * from answers";
  $check3 = mysqli_query($con,$table3);
  
  if (!$check3) {

    $create3 = "CREATE TABLE answers (
    aid   int(50) NOT NULL AUTO_INCREMENT,
    id    int(50) NOT NULL,
    content    text(10000) NOT NULL,
    username   varchar(50) NOT NULL,
    datetym    varchar(50) NOT NULL,
    tym        varchar(50) NOT NULL,
    level      varchar(50) NOT NULL,
    PRIMARY KEY(aid) )";
    $ok3 = mysqli_query($con,$create3);
    if (!$ok3) {
      echo 'error dark';
    }else
    { echo 'table created successfully';  }
  }

$table4 = " select * from admin";
  $check4 = mysqli_query($con,$table4);
  
  if (!$check4) {

    $create4 = "CREATE TABLE admin (
    login_id varchar(50) NOT NULL,
    password varchar(50) NOT NULL )";
    $ok4 = mysqli_query($con,$create4);
    if (!$ok4) {
      echo 'error dark';
    }else
    { echo 'table created successfully';  }
  }


$admin_check_query = "SELECT login_id FROM admin ";
$admin_check_result = mysqli_query($con, $admin_check_query);

$admin_check_row = mysqli_fetch_array($admin_check_result, MYSQLI_ASSOC);

if(! $admin_check_row) {

  $admin_info = "INSERT INTO admin (login_id, password)
  VALUES ('gne', 'gate')";
  
  $check5 = mysqli_query($con,$admin_info);
  if(!$check5){
    echo 'admin not created';
  }
}
?>

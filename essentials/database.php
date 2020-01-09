	<?php  

$host="localhost"; // Host name 
$user="root";  // Mysql user 
$db="forum";  // Database name 

$con=mysqli_connect("$host","$user","","$db") or die('Database not connected'); //connecting database

if (!mysqli_select_db($con,$db)){    // Create database if not already there
    $sql = "CREATE DATABASE ".$db;
    if ($con->query($sql) === TRUE) {
        echo "Database created successfully";
    }else {
        echo "Error creating database: " . $con->error;
    }
} 
?>

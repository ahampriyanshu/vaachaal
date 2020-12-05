<?php
$host = "localhost"; // Host name 
$user = "****";     // Mysql user 
$password = "****";                 // User can here declare a variable for a password 
date_default_timezone_set('Asia/Kolkata');
$con = mysqli_connect("$host", "$user", "$password") or die('Database not connected'); 


$db = mysqli_SELECT_db($con, "****");
if (empty($db))     
{
  $dbcr = 'create database ****';   
  $check = mysqli_query($con, $dbcr);

  if (!$check) {

    echo "database couldn't be created ";
  }
}

function time_elapsed_string($datetime, $full = false)
{
  $now = new DateTime;
  $ago = new DateTime($datetime);
  $diff = $now->diff($ago);

  $diff->w = floor($diff->d / 7);
  $diff->d -= $diff->w * 7;

  $string = array(
    'y' => 'year',
    'm' => 'month',
    'w' => 'week',
    'd' => 'day',
    'h' => 'hour',
    'i' => 'minute',
    's' => 'second',
  );
  foreach ($string as $k => &$v) {
    if ($diff->$k) {
      $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
    } else {
      unset($string[$k]);
    }
  }

  if (!$full) {
    $string = array_slice($string, 0, 1);
  }
  return $string ? implode(', ', $string) . ' ago' : 'just now';
}

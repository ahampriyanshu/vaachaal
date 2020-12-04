<?php session_start();
error_reporting(E_ALL);
if(!isset($_SESSION['admin'])){
  header('location:login.php');
  }
require_once('../essentials/config.php');
date_default_timezone_set('Asia/Kolkata');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta content="text/html; charset=utf-8" />
  <meta name="description" content="Forum for the people,by the people,to the people">
  <meta name="keywords" content="php7,ahampriyanshu,forum,question,and,answer,gate,jee,mains,advance,clat,cat,aiims,neet,quora,stackoverflow">
  <meta name="author" content="ahampriyanshu">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin</title>
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
  <link href="../css/style.css" rel="stylesheet" type="text/css">
</head>

<body class="bg-light">
  <div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-light">
      <a style="font-weight: bolder; font-size:2em" class="navbar-brand" href="index.php">Admin</a>
    </nav>
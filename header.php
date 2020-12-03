<?php session_start();
error_reporting(E_ALL);
require_once('essentials/config.php');
date_default_timezone_set('Asia/Kolkata');
if ($_SESSION["loggedin"]) {
  $user = $_SESSION["loggedin"];
} else {
  $user = '0';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta content="text/html; charset=utf-8" />
  <meta name="description" content="Forum for the people,by the people,to the people">
  <meta name="keywords" content="php7,ahampriyanshu,forum,question,and,answer,gate,jee,mains,advance,clat,cat,aiims,neet,quora,stackoverflow">
  <meta name="author" content="ahampriyanshu">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Home</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet" type="text/css">
</head>

<body class="bg-light">
  <div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-light">
      <a style="font-weight: bolder; font-size:2em" class="navbar-brand" href="index.php">Vaachal</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="trending.php">Trending</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="feed.php">Feed</a>
          </li>
        </ul>

        <form class="form-inline my-lg-0" action="/action_page.php">
          <input type="text" placeholder="Search.." name="search" aria-label="Search">
          <button type="submit"><i class="fa fa-search"></i></button>
        </form>

        <?php
        if (isset($_SESSION["loggedin"])) {
        ?>
          <a class="btn btn-success my-2 ml-1" href="addQuestion.php">Ask</a>
          <a class="btn btn-success my-2 ml-1" href="dashboard.php">My Account</a>
        <?php } else { ?>
          <a class="btn btn-success my-2 ml-1" href="login.php">Ask</a>
          <a class="btn btn-success my-2 ml-1" href="login.php">Login</a>
        <?php } ?>
      </div>
    </nav>
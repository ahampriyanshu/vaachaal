<?php session_start();
error_reporting(0);
require_once('essentials/config.php');
if (isset($_SESSION["loggedin"])) {
  $username = $_SESSION["loggedin"];
} else {
  $username = 'guest';
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
  <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico" />
  <link rel="apple-touch-icon" sizes="57x57" href="img/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="img/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="img/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="img/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="img/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="img/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="img/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="img/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="img/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
<link rel="manifest" href="manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="img/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet" type="text/css">
</head>

<body class="bg-light">
  <div class="container-fluid">
    <nav style="font-weight: 700; " class="navbar bg-light navbar-expand-lg navbar-light">
      <a style="font-weight: bolder; font-size:2em" class="navbar-brand" href="index.php">Vaachaal</a>
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

          <?php
          if (isset($_SESSION["loggedin"])) {
          ?>
            <li class="nav-item">
              <a class="nav-link" href="addQuestion.php">Ask</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="dashboard.php">My Account</a>
            </li>
          <?php } else { ?>
            <li class="nav-item">
              <a class="nav-link" href="login.php">Ask</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php">Login</a>
            </li>
          <?php } ?>
        </ul>

        <button type="button" class="btn btn-success mr-2" data-toggle="modal" data-target="#filterModal">
          Filter
        </button>


        <div class="modal fade" id="filterModal" tabindex="-1" role="dialog" aria-labelledby="filterModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="filterModalLabel">Filters</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form name="addform" class="my-2" action="filterResult.php" method="POST" enctype="multipart/form-data">

                  <div class="form-group p-2">
                    <select name="category" class="form-control">
                      <option value="Tech">Tech</option>
                      <option value="Literature">Literature</option>
                      <option value="Web">Web</option>
                      <option value="Sports">Sports</option>
                      <option value="Political">Political</option>
                      <option value="Maths">Maths</option>
                      <option value="Science">Science</option>
                      <option value="Histoy">Histoy</option>
                      <option value="Geography">Geography</option>
                      <option value="Economics">Economics</option>
                      <option value="Misc">Misc</option>
                    </select>
                  </div>
                  <div class="form-group p-2">
                    <select name="language" class="form-control">
                      <option value="English">English</option>
                      <option value="हिन्दी">हिन्दी</option>
                      <option value="తెలుగు">తెలుగు</option>
                      <option value="தமிழ்">தமிழ்</option>
                      <option value="ಕನ್ನಡ">ಕನ್ನಡ</option>
                      <option value="ਪੰਜਾਬੀ">ਪੰਜਾਬੀ</option>
                      <option value="বাংলা">বাংলা</option>
                    </select>
                  </div>
                  <div class="form-group p-2">
                    <select name="duration" class="form-control">
                      <option value="0-2 min">0-2 Min</option>
                      <option value="2-5 Min">2-5 Min</option>
                      <option value="5-10 Min">5-10 Min</option>
                    </select>
                  </div>
                  <div class="modal-footer">
                    <button type="submit" name="query" class="btn btn-primary">Go</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <form class="form-inline my-lg-0" action="searchResult.php" method="GET">
          <input type="text" placeholder="Search.." name="query" aria-label="Search">
          <button class=" my-sm-0" type="submit"><i class="fa fa-search"></i></button>
        </form>
      </div>
    </nav>
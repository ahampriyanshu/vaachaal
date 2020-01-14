<?php session_start(); ?>
<?php
if(!isset($_SESSION['loggedin'])){
header('location:index.php');}
?>
<!DOCTYPE html>
<html>
  <head>
      <meta charset="UTF-8">
  <meta name="description" content="GNDEC GATE FORUM">
  <meta name="keywords" content="gate,priyanshumay,gne,gndec,">
  <meta name="author" content="PriyanshuMay,priyanshumay">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
  </head>
  <style type="text/css">
  <!--
  #abt {
  background: #fff;
  border: 1px solid #e2e2e2;
  box-shadow: 0 0 5px #888;
  border-radius: 4px;
  padding-top: 25px;
  width: 850px;
  height: 525px;
  position: absolute;
  bottom: initial;
  margin: auto;
  overflow: hidden;
  top: 10%;
  }
  #contact_hide{
  font-family: courier new;
  visibility: hidden;
  width: 350px;
  background-color: #333;
  color: white;
  text-align: center;
  border-radius: 6px;
  padding: 7px 0;
  position: absolute;
  z-index: 1;
  }
  #contact_show:hover #contact_hide{
  visibility: visible;
  }
  #contact_show{
  font-size: 20px;
  font-family: courier new;
  }
  #contact_img{
  transition: transform .2s;
  border-radius: 40%;
  border: 0;
  }
  #contact_img:hover{
  transform: scale(1.2);
}

  -->
  </style>
  <body background="img/back.jpg">
    <?php
    include("header.php");
    include("panel.php");
    
    echo "<div id=\"abt\" style=\"position: absolute; top:12%;left:20%;\">
      <a href=\"https://github.com/PriyanshuMay\"> <img id=\"contact_img\"  style=\"position: absolute; top:52%;left:7%;\" src=\"img/Octocat.png\"  width=\"200px\" height=\"150px\" />
      </a>
      <a  href=\"https://github.com/PriyanshuMay/GNE-Gate-Forum/archive/master.zip\"><img id=\"contact_img\" style=\"position: absolute; top:25%;right:7%;\" src=\"img/download.png\" width=\"140px\" height=\"140px\" />
      </a>
      <a  href=\"https://gndec.ac.in\"><img id=\"contact_img\" style=\"position: absolute; top:5%;left:7%; \" src=\"img/gnelogo.png\"  width=\"160px\" height=\"140px\" />
      </a>
      <a  href=\"https://narratingstories.wordpress.com\"><img id=\"contact_img\" style=\"position: absolute; top:70%;right:7%;\" src=\"img/Word.png\"  width=\"140px\" height=\"130px\" /></a>
      <div  style='position: absolute; top:15%; left:30%;' id='contact_show'>College's Website<div id='contact_hide'>&emsp;visit GNDEC official website&emsp;</div></div>
      <div  style='position: absolute; top:38%; right:30%;' id='contact_show'>Download Source Code<div id='contact_hide'>&emsp;Download zip file</div></div>
      <div  style='position: absolute; top:62%; left:33%;' id='contact_show'>My Github<div id='contact_hide'>&emsp;&emsp;fork this website's repository &emsp;&emsp;</div></div>
      <div  style='position: absolute; top:80%; right:28%;' id='contact_show'>My blog
        <div id='contact_hide'>&emsp;visit my wordpress site&emsp;</div></div>
      </div>";
      ?>
      </script>
    </body>
  </html>
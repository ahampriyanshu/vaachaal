<?php session_start(); ?>
<?php 
    if(!isset($_SESSION['loggedin'])){
    header('location:index.php');}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Contact</title>
</head>
<style type="text/css">

<!--
.abt { 
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
    overflow-y: hidden;
    top: 10%;
}

.heading{
  font-family: 'Courier', sans-serif;
}

.sub{
  font-family: 'Trebuchet MS', sans-serif;
}

-->
</style>
<body background="img/back.jpg">
<?php
include("header.php");
include("panel.php");
  
  echo "<div class=\"abt\" style=\"position: absolute; top:12%;left:20%;\">

 <a href=\"https://github.com/PriyanshuMay\"> <img class=\"img-circle\" 
  style=\"position: absolute; top:2%;left:5%;\" src=\"img/Octocat.png\"  width=\"200px\" height=\"150px\" />
    </a>

     <a  href=\"https://github.com/PriyanshuMay/GNE-Gate-Forum/archive/master.zip\"><img class=\"img-circle\" style=\"position: absolute; top:25%;right:7%;\" src=\"img/download.png\" width=\"140px\" height=\"140px\" />
    </a>

 <a  href=\"https://gndec.ac.in\"><img class=\"img-circle\" style=\"position: absolute; top:52%;left:7%;\" src=\"img/gnelogo.png\"  width=\"160px\" height=\"140px\" />
    </a>


 <a  href=\"https://narratingstories.wordpress.com\"><img class=\"img-circle\" style=\"position: absolute; top:73%;right:7%;\" src=\"img/Word.png\"  width=\"140px\" height=\"130px\" />
    </a>

</div>";
?>
</script>
</body>
</html>

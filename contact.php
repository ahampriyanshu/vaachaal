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
<body background="back.jpg">
<?php
include("header.php");
  
  echo "<div class=\"abt\" style=\"position: absolute; top:12%;left:20%;\">
  <img class=\"img-circle\" style=\"position: absolute; top:2%;left:5%;\" src=\"Octocat.png\"  width=\"200px\" height=\"150px\" />
    </center>
    <img class=\"img-circle\" style=\"position: absolute; top:35%;left:7%;\" src=\"Gmail.png\"  width=\"160px\" height=\"150px\" />
    </center>
    <img class=\"img-circle\" style=\"position: absolute; bottom:4%;left:6%;\" src=\"Word.png\"  width=\"180px\" height=\"150px\" />
    </center>
</div>";
?>
</script>
  <?php @$_SESSION['login']; 
  error_reporting(1);
  ?>  

</body>
</html>

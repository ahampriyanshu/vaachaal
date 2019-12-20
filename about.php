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
<?php
include("header.php");

if(isset($_SESSION['login'])){
  exit;
    echo "<div class=\"abt\" style=\"position: absolute; top:12%;left:20%;\">
  <img class=\"img-circle\" style=\"position: absolute; top:1%;left:5%;\" src=\"IIS.jpg\"  width=\"200px\" height=\"150px\" />
    </center>
    <img class=\"img-circle\" style=\"position: absolute; top:3%;left:35%;\" src=\"IITD.png\"  width=\"180px\" height=\"120px\" />
    </center>
    <img class=\"img-circle\" style=\"position: absolute; top:3%;right:8%;\" src=\"IITM.png\"  width=\"180px\" height=\"120px\" />
    </center>
  <h1 style=\"position:absolute;top:26%;left:10%;\" class=\"heading\"><center>GRADUATE APTITUDE TEST IN ENGINEERING</center></h1>
  <h style=\"position:absolute;top:38%;left: 3%;right: 3%;\" class=\"sub\">GATE is a computer-based exam conducted at the national level with an aim to examine the understanding of various Engineering and Science UG subjects.GATE exam consists of 65 MCQs and numerical question over a 3 hour duration.GATE 2020 is being conducted by IIT-D,IIT-M IISc.GATE score is valid for 3 years and enables students to gain admission to various PG programs such as ME,BE and PhD in IITs,IISc and several other prestigious universities.Top rank holders also get direct interview calls for prestigious government jobs in PSUs</h>
  <img class=\"img-circle\" style=\"position: absolute; bottom:2%;left:5%;\" src=\"PSU.png\"  width=\"750px\" height=\"220px\" />
</div>";
}
else {
  echo "<div class=\"abt\" style=\"position: absolute; top:12%;left:5%;\">
  <img class=\"img-circle\" style=\"position: absolute; top:1%;left:5%;\" src=\"IIS.jpg\"  width=\"200px\" height=\"150px\" />
    </center>
    <img class=\"img-circle\" style=\"position: absolute; top:3%;left:35%;\" src=\"IITD.png\"  width=\"180px\" height=\"120px\" />
    </center>
    <img class=\"img-circle\" style=\"position: absolute; top:3%;right:8%;\" src=\"IITM.png\"  width=\"180px\" height=\"120px\" />
    </center>
  <h1 style=\"position:absolute;top:26%;left:10%;\" class=\"heading\"><center>GRADUATE APTITUDE TEST IN ENGINEERING</center></h1>
  <h style=\"position:absolute;top:38%;left: 3%;right: 3%;\" class=\"sub\">GATE is a computer-based exam conducted at the national level with an aim to examine the understanding of various Engineering and Science UG subjects.GATE exam consists of 65 MCQs and numerical question over a 3 hour duration.GATE 2020 is being conducted by IIT-D,IIT-M IISc.GATE score is valid for 3 years and enables students to gain admission to various PG programs such as ME,BE and PhD in IITs,IISc and several other prestigious universities.Top rank holders also get direct interview calls for prestigious government jobs in PSUs</h>
  <img class=\"img-circle\" style=\"position: absolute; bottom:2%;left:5%;\" src=\"PSU.png\"  width=\"750px\" height=\"220px\" />
</div>";

}
?>
</script>
  <?php @$_SESSION['login']; 
  error_reporting(1);
  ?>  

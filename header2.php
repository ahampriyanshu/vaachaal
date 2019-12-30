<?php
session_start();
error_reporting(1);
include("database.php");
extract($_SESSION);
?>
<style type="text/css">

<!--
.top-bar{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    z-index: 5050;
    background-color: #fafafb;
    transition: box-shadow 0px 8px 16px 0px rgba(0,0,0,0.2);
    height: 50px;
    box-sizing: border-box;
    font-family: Arial,"Helvetica Neue",Helvetica,sans-serif;
    border-top: 3px solid #1DB954;
    border-bottom: 1px solid lightgrey;
}
.dropbtn {
  background-color: #833AB4;
  color: white;
  padding: 11px;
  font-size: 11px;
  border: none;
  cursor: pointer;
  font-weight: light;
        font-family:'Trebuchet MS', sans-serif;
        border-radius: 5%;
}

.dropbtn:hover, .dropbtn:focus {
  background-color: #DB4437;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  max-width: 150px;
  overflow: auto;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown a:hover {background-color: #ddd;}

.dropbutton {
  background-color: #1DB954;
  color: white;
  padding: 11px;
  font-size: 11px;
  border: none;
  cursor: pointer;
  font-family:'Trebuchet MS', sans-serif;
        border-radius: 5%;
}

.addq{
  background-color: #1DB954;
  color: white;
  padding: 11px;
  font-size: 11px;
  border: none;
  cursor: pointer;
  font-family:'Trebuchet MS', sans-serif;
        border-radius: 5%;
}

.addq:hover{
background-color: #DB4437;
}
.dropd {
  position: relative;
  display: inline-block;
}

.dropd-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropd-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropd-content a:hover {background-color: #ddd;}

.dropd:hover .dropd-content {display: block;}

.dropd:hover .dropbutton {background-color: #3e8e41;}

.show {display: block;}
-->
</style>   
<div class="top-bar">
<div style="position: absolute; top:8%;left:2%;"class="dropd">
  <button class="dropbutton">HOME</button>
  <div class="dropd-content">
    <a href="about.php">About</a>
    <a href="contact.php">Contact Us</a>
    <a href="https://github.com/PriyanshuMay/GNE-Gate-Forum.git">Download</a>
  </div>
</div>

<?php
  if(isset($_SESSION['login']))
  {

    echo '<div style="position: absolute; top:8%;left:50%;"class="dropd">
  <a href="signout.php">logout</a></div>';
}
?>

<img style="position: absolute;top:2%;left:7%;" class="img-topbar" src="Topbar.png"  width="290px" height="45px" />

<?php
echo "<div style=\"position: absolute; top:8%;right:2%;\" class=\"dropdown\">
  <button onclick=\"myFunction()\" class=\"dropbtn\">My Account</button>
  <div id=\"myDropdown\" class=\"dropdown-content\">
    <a href=\"index.php\">Home</a>
    <a href=\"signout.php\">LogOut</a>
    <a href=\"chpass.php\">Change Password</a>
  </div>
</div>";
   
echo "<div style=\"position: absolute; top:8%;right:10%;\" class=\"addq\">
      <a href=\"add.php\">Add Question</a>
</div>";
?>
</div> 

<script>
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");}
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
      openDropdown.classList.remove('show');}}}}
</script> 
</table>

<style type="text/css">
<!--
.top_bar_header_web{
position: fixed;
top: 0;
left: 0;
width: 100%;
z-index: 1;
box-shadow: 0 0 5px #888;
background-color: #fafafb;
height: 80px;
box-sizing: border-box;
font-family: Arial,"Helvetica Neue",Helvetica,sans-serif;
border-bottom: 1px solid lightgrey;
}
.top_bar_header_mob{
position: fixed;
top: 0;
left: 0;
width: 100%;
z-index: 1;
box-shadow: 0 0 5px #888;
background-color: #fafafb;
height: 53px;
box-sizing: border-box;
font-family: Arial,"Helvetica Neue",Helvetica,sans-serif;
border-bottom: 1px solid lightgrey;
}
.dropbutton_header {
background-color: #4CAF50;
color: white;
padding: 11px;
font-size: 12px;
font-weight: bolder;
border: none;
cursor: pointer;
font-family:'Trebuchet MS', sans-serif;
border-radius: 5%;
}
.addq{
background-color: #4CAF50;
color: white;
padding: 11px;
font-size: 11px;
border: none;
cursor: pointer;
font-family:'Trebuchet MS', sans-serif;
border-radius: 5%;
}
.addq:hover{
background-color: #833AB4;
}
.dropdown_header {
position: relative;
display: inline-block;
}
.dropdown_content_header {
display: none;
position: absolute;
background-color:white;
max-width: 100px;
box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
z-index: 1;
}
.dropdown_content_header a {
color: black;
padding: 12px 16px;
text-decoration: none;
display: block;
}
.dropdown_content_header a:hover {background-color: #ddd;}
.dropdown_header:hover .dropdown_content_header {display: block;}
.dropdown_header:hover .dropbutton_header {background-color: #833AB4;}
.show {display: block;}

.sidepanel  {
  height: 100%;
  width:0px;
  position: fixed;
  z-index: 2;
  background-color: #f1f1f1;
  overflow-x: hidden;
  transition: 0.5s;
}

.sidepanel a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidepanel a:hover {
  color: #f1f1f1;
}

.sidepanel .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
}

.openbtn {
  font-size: 21px;
  z-index: 0.5;
  cursor: pointer;
  background-color: white;
  color: black;
  padding: 10px 20px;
  border: none;
}

.openbtn:hover {
  font-size: 27px;
  padding: 6px 20px;
  color: #833AB4;
}
#copyright{
  font-weight: lighter;
  color: white;
  font-family: courier new;
  font-size: 10px;
}
-->
</style>
<script type="text/javascript">
function redirect() {
window.location.href = 'login.php';
};
</script>
<div class="top_bar_header_web">
  <a href="home.php"><img style="position: absolute;top:2%;left:12%;" class="img-topbar" src="img/Topbar.png"  title="college logo" width="230px" height="45px" /></a>

  <button class="openbtn"  onclick="myFunction()">☰</button>
  <div id="mySidepanel" class="sidepanel">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <a href="#">About</a>
  <a href="#">Services</a>
  <a href="#">Clients</a>
  <a href="#">Contact</a>
  <div id="copyright" style="position: absolute; left: 3%;bottom: 1%;">
  &#x24B8 all rights reserved
</div>




</div>

  <?php
  if(!isset($_SESSION['loggedin'])){
  echo "<div style=\"position: absolute; top:12%;right:2%;\" class=\"dropdown_header\">
    <button class=\"dropbutton_header\">&emsp;&nbsp;Login&nbsp;&emsp;</button>
    <div class=\"dropdown_content_header\">
      <a href=\"login.php\">Login</a>
      <a href=\"signup.php\">SignUp</a>
      <a href=\"admin.php\">Admin</a>
    </div>
  </div>";}
  else{
  echo "<div style=\"position: absolute; top:12%;right:2%;\" class=\"dropdown_header\">
    <button class=\"dropbutton_header\">My Account</button>
    <div class=\"dropdown_content_header\">
      <a href=\"dashboard.php\">Dashboard</a>
      <a href=\"signout.php\">LogOut</a>
      
    </div>
  </div>";}
  
  ?>
 
  <?php
  if(!isset($_SESSION['loggedin'])){
  echo "<button onclick=\"redirect();\" style=\"position: absolute; top:12%;right:10%;\" class=\"addq\"><b>Ask Question</b></button>";}
  else
  {
  echo "<button onclick=\"window.location.href = 'addque.php';\" style=\"position: absolute; top:12%;right:10%;\" class=\"addq\"><b>Ask Question</b></button>";}
  ?>
</div>
<script>
function openNav() {
  document.getElementById("mySidepanel").style.width = "200px";
}

function closeNav() {
  document.getElementById("mySidepanel").style.width = "0";

}

function myFunction() {
  var x = document.getElementById("mySidepanel");
  if (x.style.width === "170px") {
    x.style.width = "0px";
  } else {
    x.style.width = "170px";
  }
}
</script>
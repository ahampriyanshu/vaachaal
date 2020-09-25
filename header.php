<style type="text/css">
<!--
.top_bar_header_web{
position: fixed;
top: 0;
left: 0;
width: 100%;
z-index: 5050;
box-shadow: 0 0 5px #888;
background-color: #fafafb;
height: 65px;
box-sizing: border-box;
font-family: Arial,"Helvetica Neue",Helvetica,sans-serif;
border-bottom: 1px solid lightgrey;
}
.top_bar_header_mob{
position: fixed;
top: 0;
left: 0;
width: 100%;
z-index: 5050;
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
background-color: #f1f1f1;
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
-->
</style>
<script type="text/javascript">
function redirect() {
window.location.href = 'login.php';
};
</script>
<div class="top_bar_header_web">
  <a href="index.php"><img style="position: absolute;top:2%;left:12%;" class="img-topbar" src="img/Topbar.png"  title="college logo" width="230px" height="45px" /></a>
  <?php
  if(!isset($_SESSION['email'])){
  echo "<div style=\"position: absolute; top:12%;right:2%;\" class=\"dropdown_header\">
    <button class=\"dropbutton_header\">&emsp;&nbsp;Login&nbsp;&emsp;</button>
    <div class=\"dropdown_content_header\">
      <a href=\"login.php\">Login</a>
      <a href=\"register.php\">SignUp</a>
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
  if(!isset($_SESSION['email'])){
  echo "<button onclick=\"redirect();\" style=\"position: absolute; top:12%;right:10%;\" class=\"addq\"><b>Ask Question</b></button>";}
  else
  {
  echo "<button onclick=\"window.location.href = 'addque.php';\" style=\"position: absolute; top:12%;right:10%;\" class=\"addq\"><b>Ask Question</b></button>";}
  ?>
</div>
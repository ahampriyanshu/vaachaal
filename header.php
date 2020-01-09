<style type="text/css">
<!--
.top-bar{

    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    z-index: 5050;
    background-color: #fafafb;
    transition: box-shadow 0px 8px 16px 0px rgba(0,0,0,0.2);
    height: 50px;
    box-sizing: border-box;
    font-family: Arial,"Helvetica Neue",Helvetica,sans-serif;
    border-top: 3px solid #4CAF50;
    border-bottom: 1px solid lightgrey;
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
  color: solid black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}
.dropdown a:hover {background-color: #ddd;}
.dropbutton {
  background-color: #4CAF50;
  color: white;
  padding: 11px;
  font-size: 11px;
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
.dropd {
  position: relative;
  display: inline-block;
}
.dropd-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 95px;
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
.dropd:hover .dropbutton {background-color: #833AB4;}
.show {display: block;}
-->
</style>
<script type="text/javascript">
  function redirect() { alert('Login First'); 
window.location.href = 'index.php';
};
</script>
<div class="top-bar">
<img style="position: absolute;top:2%;left:12%;" class="img-topbar" src="img/Topbar.png"  title="college logo" width="230px" height="45px" />
  <?php
  if (session_status() == PHP_SESSION_NONE){
echo "<div style=\"position: absolute; top:8%;right:2%;\" class=\"dropd\">
  <button class=\"dropbutton\">SignIn/SignUp</button>
  <div id=\"mydropd\" class=\"dropd-content\">
    <a href=\"index.php\">SignIn</a>
    <a href=\"signup.php\">SignUp</a>
    <a href=\"admin.php\">Admin</a>
  </div>
</div>";}
    else{
       echo "<div style=\"position: absolute; top:8%;right:2%;\" class=\"dropd\">
  <button class=\"dropbutton\">My Account</button>
  <div id=\"mydropd\" class=\"dropd-content\">
    <a href=\"dashboard.php\">Dashboard</a>
    <a href=\"signout.php\">LogOut</a>
    <a href=\"changepassword.php\">Change Password</a>
  </div>
</div>";}
    
?>
      <?php
  if (session_status() == PHP_SESSION_NONE){
    echo "<button onclick=\"redirect();\" style=\"position: absolute; top:8%;right:10%;\" class=\"addq\"><b>Ask Question</b></button>";}
    else
   {
    echo "<button onclick=\"window.location.href = 'addque.php';\" style=\"position: absolute; top:8%;right:10%;\" class=\"addq\"><b>Ask Question</b></button>";}
    ?>
</div> 
</table>

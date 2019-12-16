<style type="text/css">
<!--
.top-bar{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    z-index: 5050;
    background-color: #fafafb;
    transition: box-shadow cubic-bezier(.165, .84, .44, 1).25s;
    height: 50px;
    box-sizing: border-box;
    font-family: Arial,"Helvetica Neue",Helvetica,sans-serif;
    border-top: 3px solid #f48024;
    border-bottom: 1px solid lightgrey;
}

.sidenav {
  height: 100%;
  width: 130px;
  position: fixed;
  z-index: 1;
  top: 40px;
  left:0;
  background: #fafafb;
  overflow-x: hidden;
  padding: 8px 0;
}

.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 25px;
  color: #f48024;
  display: block;
}

.sidenav a:hover {
  color: lightgrey;
}
-->
</style>
<div class="top-bar">GNE GATE FORUM</div>
<div class="sidenav">
  <a href="#about">About</a>
  <a href="#services">Services</a>
  <a href="#clients">Clients</a>
  <a href="#contact">Contact</a>
</div>
  <?php @$_SESSION['login']; 
  error_reporting(1);
  ?>
  </td>
    <td>
	<?php
	if(isset($_SESSION['login']))
	{
	 echo "<div align=\"right\"><strong><a href=\"index.php\"> Home </a>|<a href=\"signout.php\">Signout</a></strong></div>";
	 }
	 else
	 {
	 	echo "&nbsp;";
	 }
	?>
	</td>
	
  </tr>
  
</table>

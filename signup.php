<!DOCTYPE HTML 
<html>
<head>
<title>Register</title>
<script language="javascript">
function check()
{
  if(document.signupform.pass.value!=document.signupform.cpass.value)
  {
    alert("Confirm Password does not matched");
	document.signupform.cpass.focus();
	return false;
  }

    e=document.signupform.email.value;
		f1=e.indexOf('@');
		f2=e.indexOf('@',f1+1);
		e1=e.indexOf('.');
		e2=e.indexOf('.',e1+1);
		n=e.length;

		if(!(f1>0 && f2==-1 && e1>0 && e2==-1 && f1!=e1+1 && e1!=f1+1 && f1!=n-1 && e1!=n-1))
		{
			alert("Please Enter valid Email");
			document.signupform.email.focus();
			return false;
		}
  return true;
  }
  
</script>
<style>
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
</style>
<link href="forum.css" rel="stylesheet" type="text/css">
</head>
<body background="img/back.jpg" class="bg-success">
  <?php
  echo "<div class=\"abt\" style=\"position: absolute; top:12%;left:5%;\">
      <img class=\"img-circle\" style=\"position: absolute; top:2%;left:8%;\" src=\"img/IIT_B.png\"  width=\"170px\" height=\"130px\" />
      </center>
      <img class=\"img-circle\" style=\"position: absolute; top:3%;left:40%;\" src=\"img/IITD.png\"  width=\"170px\" height=\"130px\" />
      </center>
      <img class=\"img-circle\" style=\"position: absolute; top:3%;right:8%;\" src=\"img/IITM.png\"  width=\"160px\" height=\"130px\" />
      </center>
      <h1 style=\"position:absolute;top:26%; color:#333; left:9%;font-family:courier;\" class=\"heading\"><center>GRADUATE APTITUDE TEST IN ENGINEERING</center></h1>
      <h style=\"position:absolute;top:38%; left: 3%;right: 3%;\" class=\"sub\">GATE is a computer-based exam conducted at the national level with an aim to examine the understanding of various Engineering and Science UG subjects.GATE exam consists of 65 MCQs and numerical question over a 3 hour duration.GATE 2020 is being conducted by IIT-D in Febuary.GATE score is valid for 3 years and enables students to gain admission to various PG programs such as ME,BE and PhD in IITs,IISc and several other prestigious universities.Top rank holders also get direct interview calls for prestigious government jobs in PSUs</h>
      <img class=\"img-circle\" style=\"position: absolute; bottom:2%;left:5%;\" src=\"img/PSU.png\"  width=\"750px\" height=\"220px\" />
    </div>";
    ?>
  <?php
include("header.php");
?>
<div class="signinbox" style="position: absolute; top:10%;right:5%;">
  <center>
  <img class="img-circle" src="img/1.png"  width="200px" height="150px" style="position: relative; top:0%;"/>
  </center>
 <center><table width="80%" border="0">
  <tr><td>
  <form name="signupform" method="post" action="signupuser.php" onSubmit="return check();">
	    <tr>
        <td><input class="login_text_box" type="text" placeholder="Create Username" name="username"  required>
        </td>
      </tr>
      <tr>
        <td><input class="login_text_box" type="password" placeholder="Create Password" name="pass" required></td>
      </tr>
      <tr>
         <td><input class="login_text_box" name="cpass" placeholder="Confirm Password" type="password" id="cpass" required></td>
      </tr>
      <tr>
         <td><input class="login_text_box" type="text" name="name" placeholder="Full name" id="name" required></td>
      </tr>
      <tr>
         <td><input class="login_text_box" name="security" type="text" id="security"
            placeholder="Name of your childhood freind" required></td>
      </tr>
      <tr>
         <td><input class="login_text_box" name="phone" placeholder="+91" type="text" id="phone" required></td>
      </tr>
      <tr>
         <td><input class="login_text_box" name="email" type="text" placeholder="Enter valid e-mail" id="email" required></td>
      </tr>
        <td>&emsp;<input class="submit" type="submit" name="Submit" value="Signup">&emsp;</form>
		    <button class="submit2" onclick="window.location.href = 'index.php';" >Already a Member</button></td>   
      </tr>
      </table>
</center>
&emsp;&emsp;
</div>
</body>
</html>
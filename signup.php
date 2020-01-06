<!DOCTYPE HTML 
<html>
<head>
<title>Register</title>
<script language="javascript">
function check()
{

 if(document.form1.lid.value=="")
  {
    alert("Plese Enter Login Id");
	document.form1.lid.focus();
	return false;
  }
 
 if(document.form1.pass.value=="")
  {
    alert("Plese Enter Your Password");
	document.form1.pass.focus();
	return false;
  } 
  if(document.form1.cpass.value=="")
  {
    alert("Plese Enter Confirm Password");
	document.form1.cpass.focus();
	return false;
  }
  if(document.form1.pass.value!=document.form1.cpass.value)
  {
    alert("Confirm Password does not matched");
	document.form1.cpass.focus();
	return false;
  }
  if(document.form1.name.value=="")
  {
    alert("Plese Enter Your Name");
	document.form1.name.focus();
	return false;
  }
  if(document.form1.name.value=="")
  {
    alert("Plese Enter name");
	document.form1.name.focus();
	return false;
  }
  if(document.form1.security.value=="")
  {
    alert("Plese Enter security Name");
	document.form1.security.focus();
	return false;
  }
  if(document.form1.phone.value=="")
  {
    alert("Plese Enter Contact No");
	document.form1.phone.focus();
	return false;
  }
  if(document.form1.email.value=="")
  {
    alert("Plese Enter your Email ID");
	document.form1.email.focus();
	return false;
  }
  e=document.form1.email.value;
		f1=e.indexOf('@');
		f2=e.indexOf('@',f1+1);
		e1=e.indexOf('.');
		e2=e.indexOf('.',e1+1);
		n=e.length;

		if(!(f1>0 && f2==-1 && e1>0 && e2==-1 && f1!=e1+1 && e1!=f1+1 && f1!=n-1 && e1!=n-1))
		{
			alert("Please Enter valid Email");
			document.form1.email.focus();
			return false;
		}
  return true;
  }
  
</script>
<link href="forum.css" rel="stylesheet" type="text/css">
</head>
<body background="img/back.jpg" class="bg-success">
  <?php
include("header.php");
?>
<div class="signinbox" style="position: absolute; top:10%;right:5%;">
  <center>
  <img class="img-circle" src="img/1.png"  width="200px" height="150px" style="position: relative; top:0%;"/>
  </center>
 <table width="100%" border="0">
  <tr><td>
  <form name="form1" method="post" action="signupuser.php" onSubmit="return check();">
	<center>
    <table>
		  <tr><td><input class="login_text_box" type="text" placeholder="Create Username" name="username" ></td>
         </tr>
         <tr>
           <td><input class="login_text_box" type="password" placeholder="Create Password" name="pass"></td>
         </tr>
         <tr>
           <td><input class="login_text_box" name="cpass" placeholder="Confirm Password" type="password" id="cpass"></td>
         </tr>
         <tr>
           <td><input class="login_text_box" type="text" name="name" placeholder="Full name" id="name"></textarea></td>
         </tr>
         <tr>
           <td><input class="login_text_box" name="security" type="text" id="security"
            placeholder="Name of your childhood freind"></td>
         </tr>
         <tr>
           <td><input class="login_text_box" name="phone" placeholder="+91" type="text" id="phone"></td>
         </tr>
         <tr>
           <td><input class="login_text_box" name="email" type="text" placeholder="Enter valid e-mail" id="email"></td>
         </tr>
         <td>&emsp;
          <input class="submit" type="submit" name="Submit" value="Signup">&emsp;&emsp;&emsp;
		   <button class="submit2" onclick="window.location.href = 'index.php';" >Already a Member</button>
    </td>   
       </table>
     </form>
   </tr>
 </table>
</center>
</div>
</body>
</html>

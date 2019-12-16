<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Register</title>
<link rel="stylesheet" href="css/bootstrap.min.css"/>
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
  if(document.form1.address.value=="")
  {
    alert("Plese Enter Address");
	document.form1.address.focus();
	return false;
  }
  if(document.form1.city.value=="")
  {
    alert("Plese Enter City Name");
	document.form1.city.focus();
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
    alert("Plese Enter your Email Address");
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
<body background="back.jpg" class="bg-success">
  <?php
include("header.php");
?>

  <div class="signinbox" style="position: absolute; top:16%;right:5%;">
 <table width="100%" border="0">
   <tr>
     <td><form name="form1" method="post" action="signupuser.php" onSubmit="return check();">
       <center>
		<img class="img-circle" src="1.png"  width="240px" height="190px" />
		</center>	<br>
			<table class=" table table-striped">
		
         <tr>
           <td class="style7">LOGIN ID</div></td>
           <td><input class="login_text_box"type="text" name="lid"></td>
         </tr>
         <tr>
           <td class="style7">Password</td>
           <td><input class="login_text_box"type="password" name="pass"></td>
         </tr>
         <tr>
           <td class="style7" >Confirm Password </td>
           <td><input class="login_text_box" name="cpass" type="password" id="cpass"></td>
         </tr>
         <tr>
           <td class="style7">Name</td>
           <td><input class="login_text_box" name="name" type="text" id="name"></td>
         </tr>
         <tr>
           <td valign="top" class="style7">Address</td>
           <td><textarea class="login_text_box" name="address" id="address"></textarea></td>
         </tr>
         <tr>
           <td valign="top" class="style7">City</td>
           <td><input class="login_text_box" name="city" type="text" id="city"></td>
         </tr>
         <tr>
           <td valign="top" class="style7">Phone</td>
           <td><input class="login_text_box" name="phone" type="text" id="phone"></td>
         </tr>
         <tr>
           <td valign="top" class="style7">E-mail</td>
           <td><input class="login_text_box" name="email" type="text" id="email"></td>
         </tr>
         <tr>
           <td><input class="btn btn-danger" type="submit" name="Submit" value="Signup">
		   <a class="btn btn-success " href="index.php">Already a Member</a></th>
           </td>
         </tr>
       </table>
     </form></td>
   </tr>
 </table>
 <p>&nbsp; </p>
</div>
</body>
</html>

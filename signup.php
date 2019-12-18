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

  <div class="signinbox" style="position: absolute; top:10%;right:5%;">
 <table width="100%" border="0">
   <tr>
     <td><form name="form1" method="post" action="signupuser.php" onSubmit="return check();">
       <center>
		<img class="img-circle" src="1.png"  width="200px" height="150px" />
		</center>	<br>
			<center><table>
        <tr>
      
           <td><input class="login_text_box" name="name" placeholder="Full Name" type="text" id="name"></td>
         </tr>
		  <tr>       
           <td><input class="login_text_box"type="text" placeholder="Create Username" name="lid"></td>
         </tr>
         <tr>
           <td><input class="login_text_box"type="password" placeholder="Create Password" name="pass"></td>
         </tr>
         <tr>
           <td><input class="login_text_box" name="cpass" placeholder="Confirm Password" type="password" id="cpass"></td>
         </tr>
         <tr>
           <td><textarea class="login_text_box" name="address" placeholder="Full Address" id="address"></textarea></td>
         </tr>
         <tr>
           <td><input class="login_text_box" name="city" placeholder="Your current City" type="text" id="city"></td>
         </tr>
         <tr>
           <td><input class="login_text_box" name="phone" placeholder="+91" type="text" id="phone"></td>
         </tr>
         <tr>
           <td><input class="login_text_box" name="email" type="text" placeholder="Enter valid e-mail" id="email"></td>
         </tr>
         <td>
          <input class="submit" type="submit" name="Submit" value="Signup">
		   <a class="submit2" href="index.php">Already a Member</a>
    </td>   
       </table>
     </form>
   </tr>
 </table>
</center>
</div>
</body>
</html>

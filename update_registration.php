<?php 
include("config.php");	
$query="SELECT * FROM login where regId='".$_GET["regId"]."'";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($result);

if(isset($_GET["msg"])=="error")
{
	echo("Enter valid info");
}
?>

<html>
<head>

<title>Register</title>
<style>
<!--
.tab { margin-left: 270px; }
-->
</style>
<script language="javascript">
	function Validate()
	{
		if(document.getElementById("firstname").value=="")
			{
				alert("please select First Name");
				document.getElementById("firstname").focus();
				return false;
				
			}
		else if(document.getElementById("lastname").value=="")
			{
				alert("please enter valid Last Name");
				document.getElementById("lastname").focus();
				return false;
				
			}
		else if(document.getElementById("email").value=="")
			{
				alert("please Enter Valid email");
				document.getElementById("email").focus();
				return false;
				
			}
		else if(document.getElementById("username").value=="")
			{
				alert("please enter valid User Name");
				document.getElementById("username").focus();
				return false;
				
			}
		else if(document.getElementById("password").value=="")
			{
				alert("please select Password");
				document.getElementById("password").focus();
				return false;
				
			}
		else if(document.getElementById("confirm_password").value=="")
			{
				alert("please select Confirm Password");
				document.getElementById("confirm_password").focus();
				return false;
				
			}
		
		else if(document.getElementById("password").value!=document.getElementById("confirm_password").value)
			{
				alert("Confirm password does not match");
				document.getElementById("confirm_password").focus();
				return false;
				
			}
	}
	
	</script>
</head>

<body>
<p style="margin:0;margin-left:300px;width:400px;"> <a href='index.php'><b> <font size="2" face="verdana" color="green"> Home</a>
&nbsp;&nbsp;&nbsp;&nbsp; <a href='login.php'><b> <font size="2" face="verdana" color="green"> Login</a>
&nbsp;&nbsp;&nbsp;&nbsp; <a href='contact.php'><b> <font size="2" face="verdana" color="green"> Contact us</a>



<div id="logo" style="position:absolute; left:300px; top:150px; width: 600px; height: 200px;"> 
	<p><font size="+2"color="green">Register:</font></p>
	</br>
	<form name="form1" method="post" action="process_update.php?action=update" autocomplete="off" onSubmit="return Validate()">
		<input type="hidden" name="regId" value="<?php echo $row["regId"]; ?>">
	<font size="3" face="verdana" color="">
	
		<table width="115%" border="0">
	
			<tr> 
				<td width="27%"><font size="3" face="verdana" color="green">First Name</td>
				<td width="73%"><input type="text" name="firstname" id="firstname" value="<?php echo $row["firstname"]; ?>"></td>
				
			</tr>
			
			<tr> 
				<td><font size="3" face="verdana" color="green">Last Name</td>
				<td><input type="text" name="lastname" id="lastname" value="<?php echo $row["lastname"]; ?>" ></td>
				
			</tr>
			
			<tr> 
				<td><font size="3" face="verdana" color="green">Email</td>
				<td><input type="text" name="email" id="email" value="<?php echo $row["email"]; ?>"></td>
				
			</tr>
		
			<tr> 
				<td><font size="3" face="verdana" color="green" >Username </td>
				<td><input type="text" name="username" id="username" value="<?php echo $row["username"]; ?>"></td>
				
			</tr>
			
			<tr> 
				<td><font size="3" face="verdana" color="green">Password</td>
				<td><input type="password" name="password" id="password" value="<?php echo $row["password"]; ?>"></td>
			
			</tr>
			
			<tr> 
				<td><font size="3" face="verdana" color="green">Confirm Password</td>
				<td><input type="password" name="confirm_password" id="confirm_password"></td>
			
			</tr>
			
			<tr> 
				<td>&nbsp;</td>
				<td> <INPUT NAME="name" TYPE="reset" VALUE="Reset">&nbsp;&nbsp;&nbsp;
					<input type="submit" name="submit" value="Submit"></td>
			</tr>
		</table>
	</form>
</div>
</br>
</br>
<img src="regpic.jpg" alt="Registration " width="1024" height="350" />
</b>
<body bgcolor="#000000">

<div id="logo" style="position:absolute; left:330px; top:400px; "> 
</body>	
</html>

<!--


function check_username(username)
{
	if(username.length==0)	return;
	var xmlhttp;
	if(window.XMLHttpRequest)	
		xmlhttp=new XMLHttpRequest();
	else						
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	url="ajax_function.php?block=check_username&value="+username;
	xmlhttp.open("GET",url,true);
	xmlhttp.send();		
	xmlhttp.onreadystatechange=function()
	{
		if(xmlhttp.readyState==4 && xmlhttp.status==200)
		{
			if(xmlhttp.responseText=="1")
			{
				document.getElementById("info").innerHTML="User Name aready Exist";
				document.getElementById("user_name").value="";
			}
		}
	}
}
-->

<?php 
	session_start();
	$_SESSION['id']="id";
	$conn=mysqli_connect("localhost","root","");
	mysqli_select_db($conn,"admission");
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
	<form name="form1" method="post" action="register.php" autocomplete="off" onSubmit="return Validate()">
	<font size="3" face="verdana" color="">
	
		<table width="115%" border="0">
	
			<tr> 
				<td width="27%"><font size="3" face="verdana" color="green">First Name</td>
				<td width="73%"><input type="text" name="firstname" id="firstname"></td>
				
			</tr>
			
			<tr> 
				<td><font size="3" face="verdana" color="green">Last Name</td>
				<td><input type="text" name="lastname" id="lastname"></td>
				
			</tr>
			
			<tr> 
				<td><font size="3" face="verdana" color="green">Email</td>
				<td><input type="text" name="email" id="email"></td>
				
			</tr>
		
			<tr> 
				<td><font size="3" face="verdana" color="green" >Username </td>
				<td><input type="text" name="username" id="username"></td>
				
			</tr>
			
			<tr> 
				<td><font size="3" face="verdana" color="green">Password</td>
				<td><input type="password" name="password" id="password"></td>
			
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
<?php
if(isset($_POST['submit']))
{   

	$firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$user = $_POST['username'];
	$pass = $_POST['password'];
	$pass1=md5($pass);
	
	echo $pass1;
    
	if($user == "" || $pass == "" )
	{
			echo "<br/>";echo "<br/>";echo "<br/>";
		echo "Please fill up all the details.";
		echo "<br/>";
	}
	else
	{  $regexp = "/^([_a-z0-9-]+)(\.[_a-z0-9-]+)*@([a-z0-9-]+)(\.[a-z0-9-]+)*(\.[a-z]{2,6})$/i";
      // Validate the syntax 
		if(!preg_match($regexp, $email))
		{
			echo "<br/>";
			echo "Email address entered is not valid.";
			echo "</br>";
			echo "Please enter a correct email address";
			
		}
		else 
		{
			
			$regId=mt_rand(100000000,999999999);
			mysqli_query($conn,"insert into login(firstname,lastname,email,username,password,regId,dtime) values('$firstname','$lastname','$email','$user','$pass','$regId',now())")
			or die("Error ! refresh the page or relogin .");
		
			echo "<br/>";		echo "<br/>";		//echo "<br/>";
			echo "Your registration id is $regId.";
			echo "</br>";
			echo "Please note down your registration id";
			echo "</br>";
			echo " use this for checking status";
		//echo "Registration successfully done now login ";
			echo "<br/>";
			echo "<a href='login.php'>Login</a>";
		}
	}
}
?>


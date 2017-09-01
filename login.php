<?php
 session_start();
$_SESSION["login"]="login";

if(isset($_GET["msg"]))
{
	$_GET["msg"]="";
	echo("please enter valid user name or password");
}
?>

<html>
<head>

<title>Login</title>
<style>
<!--
.tab { margin-left: 650px; }
-->
</style>
	<script language="javascript">
	function Validate()
	{
		
		 if(document.getElementById("username").value=="")
			{
				alert("please enter valid user name");
				document.getElementById("username").focus();
				return false;
				
			}
		else if(document.getElementById("password").value=="")
			{
				alert("please Enter Valid password");
				document.getElementById("password").focus();
				return false;
				
			}
	}
	
	</script>

</head>

<body>
<body bgcolor="#FFFFFF">

<MARQUEE BEHAVIOR=ALTERNATE SCROLLDELAY=250>
<b> <font size="3" face="verdana" color="blue"> Online Admission Form Submission   <a href='register.php'> Register Now</a></b>  </font><IMG SRC="pic.jpg" HEIGHT=40 WIDTH=82 ALT="Idocs Guide to HTML">
</MARQUEE>
	<p class="tab"> <font size="+2"></font><p>
	 <br/>
	<form name="formlog" method="post" action="process_login.php" autocomplete="off" onSubmit="return Validate()" >
		<table width="75%" border="0">
		<table align="right">
			<tr> 
			
		     <td width="27%">&nbsp;</td>
				<td width="73%"><input type="submit" name="submit" value="submit"></td>
			
			</tr>
			</table>
			<table align="right">
			<tr> 
	<table align="right">
				<td>Password</td>
				<td><input type="password" id="password" name="password"></td>
			</tr></table>
			<tr> <table align="right">
				<td>Username</td>
				<td><input type="text" id="username" name="username" ></td>
			</tr>
		</table>

	</form>
<br><br>
<img src="pic.jpg" alt="edu " width="1000" height="500" />
<div id="logo" style="position:absolute; left:430px; top:600px; "> 


</body>
</html>
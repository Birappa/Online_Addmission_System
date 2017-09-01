<?php
{
include("config.php");
if(isset($_POST['submit']))
{
	$user = $_POST['username'];
	$pass = $_POST['password'];

	if($user == "admin" && $pass == "admin")
	{
		echo "Welcome Admin <a href='adminframe.php'> click here to see the tables</a>";
	}

	else
	{
		$result = mysqli_query($conn,"select * from login where username='$user' and password= '$pass'");
		$row_login=mysqli_fetch_assoc($result);
		$result1 = mysqli_query($conn,"select * from pdetails where regId	= '".$row_login['regId']."'");
		
		//echo("select * from pdetails where regId	= '".$row['regId']."'");
		
		if($row=mysqli_fetch_assoc($result1))
		{
			$regId	= $row['regId'];
			header("Location:updatedetails.php?regId=$regId");
		}
		else if($row_login)
		{
			
			session_start();
			$_SESSION['valid'] = $row_login['username'];
			
			$regId	= $row_login['regId'];
			header("Location:admform.php?regId=$regId");
		}
		else
		{
			header("Location:login.php?msg=error");
		}
		
	}
}
else
{
	header("Location:login.php?msg=error");
}
}
?>

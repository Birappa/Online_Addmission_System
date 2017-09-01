<?php
 include("config.php");	
 session_start();
if(!isset($_SESSION['valid']))
{	
	header("Location:login.php");
}
else if($_GET["action"]=="update")
{
	
	$query="UPDATE login
	SET firstname='".$_POST["firstname"]."', 
	lastname='".$_POST["lastname"]."', 
	email='".$_POST["email"]."',
	username='".$_POST["username"]."',
	password='".$_POST["password"]."'
	WHERE regId='".$_POST["regId"]."'";
	if(mysqli_query($conn,$query))
		header("Location:adminframe.php");
	else
		header("Location:update_registration.php?msg=error&regId=".$_POST["regId"]);
}
else if($_GET["action"]=="delete")
{
	$query="delete * from login where regId='".$_POST["regId"]."'";
	 $result=mysqli_query($conn,$query);
	$query="delete * from pdetails where regId='".$_POST["regId"]."'";
	$result=mysqli_query($conn,$query);
	$query="delete * from upload where regId='".$_POST["regId"]."'";
	$result=mysqli_query($conn,$query);
	$query="delete * from edudetails where regId='".$_POST["regId"]."'";
	$result=mysqli_query($conn,$query);
	header("Location:adminframe.php");
}
?> 
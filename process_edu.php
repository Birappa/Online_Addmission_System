<?php
session_start();
if(!isset($_SESSION["valid"]))
 {
	header("Location:login.php");
 }

	include ("config.php");

	if(isset($_POST['submit']))

	{  
	$grad_xam= $_POST['grad_xam'];
	$grad_stream = $_POST['gradstream'];
    $grad_univ = $_POST['graduniv'];
	$grad_yop = $_POST['gradyop'];
	$grad_marks = $_POST['gradmarks'];
	
	$pgrad_xam = $_POST['pgrad_xam'];
	$pgrad_stream = $_POST['pgradstream'];
    $pgrad_univ = $_POST['pgraduniv'];
	$pgrad_yop = $_POST['pgradyop'];
	$pgrad_marks = $_POST['pgradmarks'];
	
	$othr_xam = $_POST['othr_xam'];
	$othr_stream = $_POST['othrstream'];
    $othr_univ = $_POST['othruniv'];
	$othr_yop = $_POST['othryop'];
	$othr_marks = $_POST['othrmarks'];
	
    $course_applied = $_POST['course_applied'];
	$regId=$_POST["regId"];
		$result=mysqli_query($conn,"insert into edudetails(grad_xam,grad_stream,grad_univ,grad_yop,grad_marks,pgrad_xam,pgrad_stream,pgrad_univ,pgrad_yop,pgrad_marks,othr_xam,othr_stream,othr_univ,othr_yop,othr_marks,course_applied,regId) 
		values('$grad_xam','$grad_stream','$grad_univ','$grad_yop','$grad_marks','$pgrad_xam','$pgrad_stream','$pgrad_univ','$pgrad_yop','$pgrad_marks','$othr_xam','$othr_stream','$othr_univ','$othr_yop','$othr_marks','$course_applied','$regId')")
		or die("Error ! refresh the page or relogin .");
		
		if($result)
				{
					header("Location:up.php?regId=$regId");
				}
				else
				{
					header("Location:edu.php?msg=error&regId=$regId");
				}
	}
	?>



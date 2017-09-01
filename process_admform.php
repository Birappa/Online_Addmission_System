 <?php
session_start();
if(!isset($_SESSION["valid"]))
 {
	header("Location:login.php");
 }

include ("config.php");

if($_GET["action"]=="insert")
{

	$fullname = $_POST['fullname'];
	
    $age = $_POST['age'];
    $Mstatus = $_POST['Mstatus'];
	$gender= $_POST['gender'];
	$opt_cat= $_POST['opt_cat'];
	$mname = $_POST['mname'];
	$fname = $_POST['fname'];
	$religion  = $_POST['religion'];
	$address  = $_POST['address'];
	
    $state  = $_POST['state'];
	$pincode  = $_POST['pincode'];
	$email = $_POST['email'];
	$mobile  = $_POST['mobile'];
	$regId  = $_POST['regId'];
			
	/*		$regexp = "/^([_a-z0-9-]+)(\.[_a-z0-9-]+)*@([a-z0-9-]+)(\.[a-z0-9-]+)*(\.[a-z]{2,6})$/i";
			if(!preg_match($regexp, $email))
			{
				Header("Location:admform.php?adm=error");
				echo "<br/>";
				echo "<center>Email address entered is not valid.";
				echo "</br>";
				echo "<center>Please enter a correct email address";
			}
	*/			
	
			
	$query="insert into pdetails(fullname,age,Mstatus,gender,opt_cat,mname,fname,religion,address,state,pincode,email,mobile,regId) 
	values('$fullname','$age','$Mstatus','$gender','$opt_cat','$mname','$fname','$religion','$address','$state','$pincode','$email','$mobile','$regId')";
				
	if(mysqli_query($conn,$query))
	{
		header("Location:edu.php?regId=$regId");
	}
	else
	{
		header("Location:admform.php?msg=error&regId=$regId");
	}
				
}

else if($_GET["action"]=="update")
{
	
	$query="UPDATE pdetails
	SET fullname='".$_POST["fullname"]."', 
	age='".$_POST["age"]."', 
	Mstatus='".$_POST["Mstatus"]."',
	gender='".$_POST["gender"]."',
	opt_cat='".$_POST["opt_cat"]."', 
	mname='".$_POST["mname"]."', 
	fname='".$_POST["fname"]."', 
	religion='".$_POST["religion"]."', 
	address='".$_POST["address"]."', 
	state='".$_POST["state"]."', 
	pincode='".$_POST["pincode"]."', 
	email='".$_POST["email"]."', 
	mobile='".$_POST["mobile"]."' 
	
	WHERE regId='".$_POST["regId"]."'";
	//echo($query);
	if(mysqli_query($conn,$query))
		header("Location:adminframe.php");
	else
		header("Location:updatedetails.php?msg=error&regId=".$_POST["regId"]);

}
?>


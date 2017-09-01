<?php

//$conn = mysqli_connect("localhost","root","")
//or die("Could not connect to the server.");
//
//mysql_query("CREATE DATABASE mdb",$conn);
//mysql_select_db("mdb",$conn)
//or die("Could not select the database.");
$conn=mysqli_connect("localhost","root","");
mysqli_select_db($conn,"admission");
?>



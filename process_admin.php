<?php
 session_start();

if(isset($_SESSION['valid']))
{	
	include("config.php");	
	$result = mysqli_query($conn,"select * from login");
	
	echo "Welcome admin ! <a href='logout.php'>Logout</a><br/>";
	echo "<b>User List:</b><br/>";

	echo "<table border='1'>
<tr>

<td>Firstname</td>
<td>Lastname</td>
<td>Email-Id</td>
<td>Username</td>
<td>Password</td>
<td>dtime</td>
<td>regId</td>
<td>Edit</td>
</tr>";
	while($row = mysqli_fetch_assoc($result))
	{
		 echo "<tr>";
		
  echo "<td>" . $row['firstname'] . "</td>";
  echo "<td>" . $row['lastname'] . "</td>";
  echo "<td>" . $row['email'] . "</td>";
  echo "<td>" . $row['username'] . "</td>";  
  echo "<td>" . $row['password'] . "</td>";  
  echo "<td>" . $row['dtime'] . "</td>";  
  echo "<td>" . $row['regId'] . "</td>";  
 // echo "<td>" . $row['submission'] . "</td>";  
       
  
  
  echo "</tr>";
	}
	echo "</table>";
}
echo"</font>";
?> 
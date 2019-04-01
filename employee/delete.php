<?php
session_start();
$conn=mysqli_connect("localhost","root","","employee") or die("not succeful");


$sql = "DELETE FROM emp WHERE ID='".$_GET['id']."'"; 

if(mysqli_query($conn, $sql))
{ 
	echo "<script>alert('Record delete Successfully.');</script>";
	 header("refresh:0.1;url=process.php");	 
}

	
else{ 
		echo "ERROR: Could not able to execute $sql. ". mysqli_error($conn);
	}
?> 


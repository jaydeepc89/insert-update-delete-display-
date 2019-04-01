<html>
<head>
<title>employee</title>
<link rel="stylesheet" href="bootstrap.min.css" />


</head>


<body>
<div class="container tablecard">
	<h3 class="text-center"><span class="pull-left"><a href="index.php">HOME</a></span>Employee Details<hr/></h3>

<?php
session_start();

$conn=mysqli_connect("localhost","root","","employee");
	
if(isset($_POST['submit']))
{	
	$name=$_POST["name"];
	$email=$_POST["email"];
	$mobile=$_POST["mobile"];
	$address=$_POST["address"];
	$gender=$_POST["gender"];
	$education=$_POST["education"];
	//$department=$_POST["dept"];
	$password=md5($_POST["password"]);
	$confirmpassword=md5($_POST["confirmpassword"]);
	//$hobby=$_POST["hobby"]; 
	$hobby = implode(",", $_POST["hobby"]);
	
	//insert
	//$sql="INSERT INTO `employee`.`emp` VALUES ('', '$name', '$email', '$mobile', '$address', '$gender', '$education', '$password','$confirmpassword' '$hobby')";
		$sql="INSERT INTO `emp` VALUES ('', '$name', '$email', '$mobile', '$address','$gender', '$education', '$password', '$confirmpassword', '$hobby')";
		mysqli_query($conn, $sql);
		{	
			
			echo "<script>alert('Employee Registration successfull..!');</script>";
		}
}
 	//insert Record And ALso Show On Display //
 	/*if(isset($_POST['submit']))
	{
		$name=$_POST["name"];
		$email=$_POST["email"];
		$mobile=$_POST["mobile"];
		$address=$_POST["address"];
		$gender=$_POST["gender"];
		$education=$_POST["education"];
		$department=$_POST["dept"];
		$password=$_POST["password"];
		$hobby=$_POST["hobby"];
	
		$select="select * from emp";
		$result=mysqli_query($conn,$select);
	

	if($result->num_rows>0)
	{
		
		echo"<table class='table'>
		<tr>
		<th scope='col' class='text-info text-center' >ID</th>
		<th class='text-info text-center' >Name </th>
		<th class='text-info text-center' >Email</th>
		<th class='text-info text-center' >Mobile</th>
		<th class='text-info text-center' >Address</th>
		<th class='text-info text-center' >Gender</th>
		<th class='text-info text-center' >Education</th>
		<th class='text-info text-center' >password</th>
		<th class='text-info text-center'>confirm password</th>
		<th class='text-info text-center' >Hobby</th>
		<th colspan=2>Action</th>
		</tr>";
		
		
		while($row=mysqli_fetch_array($result))
		{
			echo "<tr>";
			echo "<td class='text-center' >" .$row["id"]. "</td>";
			echo "<td class='text-center' >" .$row["name"]. "</td>";
			echo "<td class='text-center' >" .$row["email"]. "</td>";
			echo "<td class='text-center' >" .$row["mobile"]. "</td>";
			echo "<td class='text-center' >" .$row["address"]. "</td>";
			echo "<td class='text-center' >" .$row["gender"]. "</td>";
			echo "<td class='text-center' >" .$row["education"]. "</td>";
			
			echo "<td class='text-center' >" .$row["password"]. "</td>";
			echo "<td class='text-center' >" .$row["confirmpassword"]. "</td>";

			echo "<td class='text-center' >" .$row["hobby"]. "</td>";
			echo '<td>'."<a href='delete.php?id=".$row['id']."'>Delete</a>".'</td>';
			echo '<td>'."<a href='otherupdate.php?edit=".$row['id']."' >Edit</a>".'</td>';
			echo "</tr>";
		}
	echo "</table>";
	}
}*/
if(isset($_POST['display']) || 1==1)
{
	// $name=$_POST["name"];
	//$email=$_POST["email"];
	//$mobile=$_POST["mobile"];
	//$address=$_POST["address"];
	//$gender=$_POST["gender"];
	//$education=$_POST["education"];
	//$department=$_POST["dept"];
	//$password=$_POST["password"];
	//$hobby=$_POST["hobby"];
	//$confirmpassword=$_POST["confirmpassword"];
	//$hobby = implode(",",$_POST["hobby"]);

	$select="select * from emp";
	$result=mysqli_query($conn,$select);
	
	if($result->num_rows>0)
	{
		echo"<table class='table table-striped'>

		<div>
		<tr>
		<thead>
		<th scope='col'class='text-center' >ID</th>
		<th class='text-info text-center' >Name </th>
		<th class='text-info text-center' >Email</th>
		<th class='text-info text-center'>Mobile</th>
		<th class='text-info text-center'>Address</th>
		<th class='text-info text-center'>Gender</th>
		<th class='text-info text-center'>Education</th>
		<th class='text-info text-center'>password</th>
		<th class='text-info' text-center>confirmpassword</th>
		<th class='text-info text-center'>Hobby</th>
		<th colspan=2 class='text-info text-center'>Action</th>
		</thead>
		</tr>
		</div>";
		while($row=mysqli_fetch_array($result))
		{
			
			echo "<tr>";
			echo "<td class='text-center text-info'>".$row["id"]."</td>";
			echo "<td class='text-center'>".$row["name"]."</td>";
			echo "<td class='text-center'>".$row["email"]."</td>";
			echo "<td class='text-center'>".$row["mobile"]."</td>";
			echo "<td class='text-center'>".$row["address"]."</td>";
			echo "<td class='text-center'>".$row["gender"]."</td>";
			echo "<td class='text-center'>".$row["education"]."</td>";
			echo "<td class='text-center'>".$row["password"]."</td>";
			echo "<td class='text-center'>".$row["confirmpassword"]."</td>";
			echo "<td class='text-center'>".$row["hobby"]."</td>";
			echo '<td>'."<button class='btn btn-info btn-sm'><a href='delete.php?id=".$row['id']."'>Delete</a></button>".'</td>';
			echo '<td>'."<button class='btn btn-success btn-sm'><a href='otherupdate.php?edit=".$row['id']."' >Edit</a></button>".'</td>';
			echo "</tr>";
			
		}
	echo "</table>";
	}
}
?>
</div>
</body>
</html>